<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index()
    {
        $products = DB::table('products')
            ->join('categories', 'products.cate_id', '=', 'categories.cate_id')

            ->select('products.*', 'categories.categoryName')
            ->get();
        $blogs = Blog::latest()->get();
        $carts=session()->get('cart',[]);
        $quantityCart=$carts;
        $dem=count($quantityCart);
        return view('trang-chu.home',compact(['products','blogs','dem','carts']));
    }

    public function order_success(){
        return view('trang-chu.Cart.order_success');
    }

    public function Products(){
        $products=product::all();
        $categories=category::all();
        $carts=session()->get('cart',[]);
        $quantityCart=$carts;
        $dem=count($quantityCart);
        return view('trang-chu.productlist',compact(['products','categories','dem','carts']))->with('i',(request()->input('page',1)-1)*5);
    }

    public function news(){
        $blogs = Blog::latest()->get();
        return view('trang-chu.blogs.blog_list',compact('blogs'));
    }
}
