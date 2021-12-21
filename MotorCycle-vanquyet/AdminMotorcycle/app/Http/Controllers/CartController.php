<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Cart;

use Session;

class cartController extends Controller
{

    public function Cart()
    {
        $carts=session()->get('cart');
        return view('trang-chu.Cart.total_cart',compact('carts'));
    }

    public function addToCart($pro_id){

        $product = product::findOrFail($pro_id);
        $cart = session()->get('cart', []);

        if(isset($cart[$pro_id])) {
            $cart[$pro_id]['quantity']++;
        } else {
            $cart[$pro_id] = [
                "name" => $product->productName,
                "quantity" => 1,
                "price" => $product->pro_new_price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back();
    }



    public function updateCart(Request $request)
    {
        if ($request->pro_id && $request->quantity){
            $carts=session()->get('cart');
            $carts[$request->pro_id]['quantity']=$request->quantity;
            session()->put('cart',$carts);
            $carts=session()->get('cart');
            $cart_update=view('trang-chu.Cart.total_cart',compact('carts'))->render();
            return response()->json([
                'code'=>200,
                'cart_update'=> $cart_update,
            ],200);
        }
    }
    public function deleteCart(Request $request)
    {
        if ($request->pro_id){
            $carts=session()->get('cart');
            unset($carts[$request->pro_id]);
            session()->put('cart',$carts);
            $carts=session()->get('cart');
            $cart_delete=view('trang-chu.Cart.total_cart',compact('carts'))->render();
            return response()->json([
                'code'=>200,
                'cart_delete'=> $cart_delete,
            ],200);
        }
    }







}
