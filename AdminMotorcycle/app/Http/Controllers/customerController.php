<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Hash;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customers=customer::latest()->paginate(45);
        return view('customers.index',compact('customers'))->with('i',(\request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'username'=>'required|unique:customers',
            'password'=>'required|min:8',
            'firstName'=>'required',
            'lastName'=>'required',
            'address'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]);



        $hashPassword = md5($request->password);
        customer::create([
            'username' => $request->username,
            'password' => $hashPassword,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);


        return redirect()->route('customers.index')->with('success', 'Add Customer Successfully');


    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
        //
        return view('customers.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer)
    {
        //
        return view('customers.update',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer $customer)
    {
        //
        //
        $request->validate([

            'password'=>'required|min:8',
            'firstName'=>'required',
            'lastName'=>'required',
            'address'=>'required',
            'email'=>'required',
            'phone'=>'required',

        ]);

        $customer->update($request->all());
        return redirect()->route('customers.index')->with('success','Update Customer Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
        //
        $customer->delete();
        return redirect()->route('customers.index')->with('success','Delete Customer Successfully');
    }
}
