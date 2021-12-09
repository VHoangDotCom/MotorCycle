<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index()
    {
       $products=product::latest()->where('productType','0')->get();
//        $products = product::all();
        $blogs = Blog::latest()->get();
        return view('trang-chu.home',compact('products','blogs'));
    }
}
