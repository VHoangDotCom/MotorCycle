<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkOutController extends Controller
{
    public function index()
    {
       return view('trang-chu.Cart.checkout');
    }
}
