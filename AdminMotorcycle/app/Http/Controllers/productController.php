<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Review;
use App\Models\Order;
use App\Models\Thumbnail;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class productController extends Controller
{

    public function index(Request $request)
    {
        if($request->has('search')){
            $search = $request->input('search');
            $products = product::search($search)->paginate(10);
            $countModal = 1;

            return view('product.view', compact('products', 'countModal'));
        }
        $products = product::with('category')->latest()->paginate(10);
        $countModal = 1;

        return view('product.view', compact('products', 'countModal'));
    }



    public function home()
    {
       //$products=product::latest()->where('productType','0')->get();
        $products = DB::table('products')
            ->join('categories', 'products.categoryID', '=', 'categories.id')

            ->select('products.*', 'categories.categoryCode')
            ->get();
        $blogs = Blog::latest()->get();
        return view('trang-chu.home',compact(['products','blogs']))->with('i',(request()->input('page',1)-1)*5);
    }


    public function create()
    {
        $categories=category::all();

        return view('product.create',compact('categories'));
    }


    public function store(Request $request)
    {
        $file = $request->file('image');
        $fileName = uniqid() . '_' . $file->getClientOriginalName();
        $file->move('images/products', $fileName);
        $product = new product();
        $product->productName = $request->input('productName');
        $product->discount = $request->input('discount');
        $product->status = $request->input('status');
        $product->cate_id = $request->input('cate_id');
        $product->description = $request->input('description');
        $product->image = $fileName;
        $product->quantity = $request->input('quantity');
        $product->pro_old_price = $request->input('pro_old_price');
        $product->pro_new_price = $request->input('pro_new_price');
        $product->pro_sale = $request->input('pro_sale');
        $product->save();

        foreach($request->file('thumb_image') as $fileThumb)
        {
            $nameChill = uniqid() . '_' . $fileThumb->getClientOriginalName();;
            $fileThumb->move('images/thumbnails', $nameChill);
            $thumbnails = new Thumbnail();
            $thumbnails->pro_id = $product->pro_id;
            $thumbnails->thumb_image = $nameChill;
            $thumbnails->save();
        }

        return redirect()->route('admin.product.index')->with('add_success', trans('admin.message.add_success'));
    }


    public function show($id)
    {
        $products = product::all();
        $product = product::findOrFail($id);
        $product->increment('view');
        $productOrderSame = product::inRandomOrder()->limit(3)->get();
        $countReview = 1;

        return view('product.product-detail', compact('product', 'products', 'productOrderSame', 'countReview'));
    }


    public function edit($id)
    {
        $categories = category::all();
        $pro = product::findOrFail($id);

        return view('product.edit', compact('pro', 'categories'));
    }




    public function update(Request $request, $id)
    {
        $pro = product::findOrFail($id);
        $file = $request->file('image');
        $fileName = uniqid() . '_' . $file->getClientOriginalName();
        $file->move('images/products', $fileName);
        $pro->productName = $request->input('productName');
        $pro->cate_id = $request->input('cate_id');
        $pro->discount = $request->input('discount');
        $pro->status = $request->input('status');
        $pro->description = $request->input('description');
        $pro->image = $fileName;
        $pro->quantity = $request->input('quantity');
        $pro->pro_old_price = $request->input('pro_old_price');
        $pro->pro_new_price = $request->input('pro_new_price');
        $pro->pro_sale = $request->input('pro_sale');
        $pro->save();

        foreach($request->file('thumb_image') as $fileChill)
        {
            $nameChill = uniqid() . '_' . $fileChill->getClientOriginalName();;
            $fileChill->move('images/thumbnails', $nameChill);
            $thumbImage = new Thumbnail();
            $thumbImage->pro_id = $id;
            $thumbImage->thumb_image = $nameChill;
            $thumbImage->save();
        }

        return redirect()->route('admin.product.index')->with('update_success', trans('admin.message.update_success'));
    }


    public function destroy($id)
    {
        $pro = product::findOrFail($id);
        $pro->proChillImages()->delete();
        $pro->reviews()->delete();
        $pro->wishlists()->delete();
        $pro->delete();

        return redirect()->route('admin.product.index')->with('del_success', trans('admin.message.del_success'));
    }

    public function showAll(Request $request)
    {
        if($request->has('min_pri') && $request->has('max_pri')){
            $min = $request->input('min_pri');
            $max = $request->input('max_pri');
            $categories = category::all();
            $products = product::pricebetween($min,$max)->paginate(12);
            return view('product.showAllProduct', compact('categories', 'products'));
        }
        $filter = $request->input('filter');
        switch ($filter)
        {
            case 'newest':
                $categories = category::all();
                $products = product::newest()->paginate(12);
                return view('product.showAllProduct', compact('categories', 'products'));
                break;
            case 'viewest':
                $categories = category::all();
                $products = product::viewest()->paginate(12);
                return view('product.showAllProduct', compact('categories', 'products'));
                break;
            case 'best_discount':
                $categories = category::all();
                $products = product::viewest()->paginate(12);
                return view('product.showAllProduct', compact('categories', 'products'));
                break;
            case 'saling':
                $categories = category::all();
                $products = product::saling()->paginate(12);
                return view('product.showAllProduct', compact('categories', 'products'));
                break;
            case 'Ascending':
                $categories = category::all();
                $products = product::ascending()->paginate(12);
                return view('product.showAllProduct', compact('categories', 'products'));
                break;
            case 'Decrease':
                $categories = category::all();
                $products = product::decrease()->paginate(12);
                return view('product.showAllProduct', compact('categories', 'products'));
                break;
            default:
                $categories = category::all();
                $products = product::nameproduct($filter)->paginate(12);
                return view('product.showAllProduct', compact('categories', 'products'));
                break;
        };
        $categories = category::all();
        $products = product::paginate(12);

        return view('product.showAllProduct', compact('categories', 'products'));
    }

}
