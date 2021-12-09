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
        return view('trang-chu.Cart.total_cart');
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
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }



    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }


}
