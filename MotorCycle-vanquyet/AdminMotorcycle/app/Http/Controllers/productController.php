<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{

    private $htmlSelect ;
    private $oldPrice;
    public function __constructor(){
        $this->htmlSelect;
        $this->oldPrice;
    }

    public function index()
    {
        $products=product::latest()->where('productType','0')->paginate(80);
        return view('product.productPeople.index',compact('products'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function Products(){
//        $products=product::paginate(6);
        $categories=category::all();
        $sortBy = request()->get('sort_by');
        $priceFrom = request()->get('priceFrom');
        $priceTo = request()->get('priceTo');
//        if(isset($_GET['sort_by'])){
//            $sort_by = $_GET['sort_by'];
//            if($sort_by=='price_asc'){
//              $categories_id = product::with('category')->where('cate_id',$categories)->orderBy('pro_new_price','ASC')->paginate(6);
//            }
//        }
        $products=product::filterProduct($sortBy)->filterPrice($priceFrom, $priceTo)->paginate(6);

        return view('trang-chu.productlist',compact(['products','categories']))->with('i',(request()->input('page',1)-1)*5);
    }
    public function Productpage(){
        return view('trang-chu.productpage');
    }


    public function create()
    {
        $categories=category::all(['cate_id','categoryName']);
        foreach ($categories as $dt) {
            if ($dt['cate_id'] > 0) {
                $this->htmlSelect .= "<option value='{$dt["cate_id"]}'>" . $dt["categoryName"] . "</option>";
            }
        }

        $htmlOption=$this->htmlSelect;
        return view('product.productPeople.create',compact('htmlOption'));
    }


    public function store(Request $request)
    {
        $request->validate([

            'productName'=> 'required|unique:products',
            'title'=> 'required',
            'pro_new_price'=> 'required',
            'pro_sale'=> 'required',
            'quantity'=> 'required',
            'cate_id'=> 'required',
            'productType'=>'required',
            'status'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }


        product::create($input);
        return redirect()->route('productPeople.index')->with('success','Add Product for people successful');

    }


    public function show(product $product,$id)
    {
        $product = product::findOrFail($id);
        return view('product.productPeople.show',compact('product'));
    }

    public function detail(product $product,$id)
    {
        $product = product::findOrFail($id);
        return view('trang-chu.productpage',compact('product'));
    }



    public function edit(product  $product,$id)
    {
        $categories=category::all();
        foreach ($categories as $dt) {
            if ($dt['cate_id'] > 0) {
                $this->htmlSelect .= "<option value='{$dt["cate_id"]}'>" . $dt["categoryName"] . "</option>";
            }
        }
        $htmlOption=$this->htmlSelect;
        $product = product::findOrFail($id);
        return view('product.productPeople.edit',compact('htmlOption','product'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([

            'productName'=> 'required|unique:products',
            'title'=> 'required',
            'pro_new_price'=> 'required',
            'pro_old_price'=> 'required',
            'pro_sale'=> 'required',
            'quantity'=> 'required',
            'cate_id'=> 'required',
            'status'=>'required',
            'image' => 'required|max:2048',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }


        $product = product::findOrFail($id);


        $product->update($input);
        return redirect()->route('productPeople.index')->with('success','Update Product successfully');

    }


    public function destroy(product $product , $id)
    {
        $product = product::findOrFail($id);
        $product->delete();
        return redirect()->route('productPeople.index')->with('success','Delete Product successfully');
    }


}
