<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\category;
use App\Models\product;
use App\Models\Review;

class HomeController extends Controller
{

    public function index()
    {
        $products = product::All();
        $proCount =1;
        $cateCount =1;
        $CateParentCount = 1;
        $categories = category::with('products')->get();
        $topSales = product::where('pro_sale', 1)->orderBy('updated_at', 'desc')->distinct('cate_id')->get();
        $hots = product::orderBy('view', 'desc')->paginate(57);

        return view('home', compact(
            'categories',
            'products',
            'proCount',
            'CateParentCount',
            'topSales',
            'hots',
            'cateCount'
        ));
    }

    public function search(Request $request){
        $cate = category::all();
        $key = $request->get('key');
        $resultFind = product::where('productName', 'like', '%'.$key.'%')->orWhere('cate_id', 'like', '%'.$key.'%')->orWhere('pro_new_price', '=', "$key")->get();
        return view('user.search', array('key' => $key, 'resultFind' => $resultFind, 'cate' => $cate));
    }


    public function filter(Request $request) {
        $cate = category::all();
        $star = $request->get('star');
        $min = $request->get('min');
        $max = $request->get('max');
        $ketqua = product::whereBetween('pro_new_price', ["$min", "$max"])->get();

        $ketqua1 = Review::Where('rate', '<', "$star")->get();

        return view('user.filter', array('ketqua' => $ketqua,'ketqua1' => $ketqua1, 'max' => $max, 'cate' => $cate));
    }


   public function contact(){
        return view('about');
   }
}
