<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    public function index(){
        $user=User::findOrFail(Auth::user()->id);

        return view('profile.index',compact('user'));
    }

    public function update(Request $request,$id){

        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'company'=>'required',
            'Job'=>'required',
            'Country'=>'required',
            'Address'=>'required',
        ]);
        $user=User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('admin.profile')->with('success','Update Profile Successfully');
    }
}
