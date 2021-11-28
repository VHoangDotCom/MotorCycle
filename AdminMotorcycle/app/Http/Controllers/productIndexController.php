<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;

class productIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     //session()->flush('cart');

        $products=product::latest()->get();
        $categories=category::latest()->get();
        return  view('Cart.index',compact(['products','categories']));
    }

    // public function indexCategory()
    // {
    //  //session()->flush('cart');

    //     $categories=category::latest()->get();
    //     return  view('Cart.index',compact('categories'));
    // }


    public function addToCart($id){
        $products=product::find($id);
        $cart=session()->get('cart');
     if (isset($cart[$id]) ){
         $cart[$id]['quantity']= $cart[$id]['quantity'] +1;
     }else{
         $cart[$id]=[
             'name'=>$products->productName,
             'price'=>$products->price,
             'quantity'=>1,
             'image'=>$products->image,
         ];
     }

     session()->put('cart',$cart);

     return response()->json([
         'code'=>200,
         'message'=>'success',
     ],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCart()
    {
      $carts=session()->get('cart');
        return view('Cart.showCart',compact('carts'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCart(Request $request)
    {
          if ($request->id && $request->quantity){
              $carts=session()->get('cart');
              $carts[$request->id]['quantity']=$request->quantity;
              session()->put('cart',$carts);
              $carts=session()->get('cart');
              $cart_update=view('Cart.shoppingCart',compact('carts'))->render();
              return response()->json([
                  'code'=>200,
                  'cart_update'=> $cart_update,
              ],200);
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteCart(Request $request)
    {
          if ($request->id){
            $carts=session()->get('cart');
           unset($carts[$request->id]);
            session()->put('cart',$carts);
            $carts=session()->get('cart');
            $cart_delete=view('Cart.shoppingCart',compact('carts'))->render();
            return response()->json([
                'code'=>200,
                'cart_delete'=> $cart_delete,
            ],200);
        }
    }
}
