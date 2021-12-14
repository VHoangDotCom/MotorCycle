<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        //
    }


    public function create($user_id)
    {
        $users = User::findOrFail($user_id);
       return view('trang-chu.Cart.checkout',compact('users'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'first_name'  => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'district' => 'required',
            'ward' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'new_email' => 'required',
            'password' => 'required',
            'message' => 'required',
            'pay_method' ,
            'order_total' ,
            'order_qty' ,
            'order_status',
        ]);
        $input = $request->all();
        Order::create($input);
        return redirect()->route('trang-chu.Cart.checkout')->with('success','');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
