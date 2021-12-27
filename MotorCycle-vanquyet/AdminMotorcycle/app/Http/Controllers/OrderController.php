<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Checkout;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkouts=Checkout::latest()->paginate(50);
        return view('order.index',compact('checkouts'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function orderList(){
        $carts=session()->get('cart',[]);
        $quantityCart=$carts;
        $dem=count($quantityCart);
        $checkouts=Checkout::latest()->paginate(50);
        return view('order.user_order',compact(['checkouts','carts','quantityCart','dem']))->with('i',(request()->input('page',1)-1)*5);
    }

    public function checkout_dashboard(){

        $checkouts=Checkout::latest()->paginate(50);
        $dem=count($checkouts);
        return view('layout.header',compact(['checkouts','dem']))->with('i',(request()->input('page',1)-1)*5);
    }


    public function create()
    {
        //
    }


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
    public function show($id)

    {
        $checkout=Checkout::findOrFail($id);
        $orders=Order::all()->where('checks_id',$id);
        return view('order.show',compact(['checkout','orders']));
    }

    public function user_review($id){
        $checkout=Checkout::findOrFail($id);
        $orders=Order::all()->where('checks_id',$id);
        return view('order.review',compact(['checkout','orders']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $checkout=Checkout::findOrFail($id);
        $checkout->status= $request->status;
        $checkout->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $checkout = Checkout::findOrFail($id);
        $checkout->delete();
        return redirect()->route('order_user')->with('success','Your order has been canceled !');
    }
}
