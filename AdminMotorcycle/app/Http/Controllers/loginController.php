<?php

namespace App\Http\Controllers;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function loginAdmin(){

        return view('login.login');
    }

    public function checkLoginAdmin(Request $request){

          //$hashPassword =bcrypt($request->password);
        $remember=$request->has('remember') ? true : false;
//        if (auth()->attempt([
//            'email'=>$request->email,
//            'password'=>$hashPassword,
//        ],$remember)){
//
//               return redirect() ->to('home');
//        }
//
//        else{
//
//            return redirect()->back()->withInput();
//        }




        if (Auth::guard('admin')->attempt([
            'email'=>$request->email,
           'password'=>$request->getPassword(),
        ],$remember)) {
            return redirect()->route('home');
        } else {
            return redirect()->back()->withInput();
        }
    }

}
