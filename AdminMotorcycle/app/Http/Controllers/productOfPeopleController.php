<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\ProductPeople;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class productOfPeopleController extends Controller
{
    private $htmlSelect ;
public function __constructor(){
    $this->htmlSelect;
}

    public function index()
    {
        //$productOfPeople=DB::table('products')->where('productType','0');
        $products=ProductPeople::latest()->where('productType','Product for People')->paginate(80);
        return view('productOfPeople.index',compact('products'))->with('i',(\request()->input('page',1)-1)*5);
    }



    public function create()
    {
        //
        $categories=category::all();
        foreach ($categories as $dt) {
            if ($dt['id'] > 0) {
                $this->htmlSelect .= "<option value='{$dt["id"]}'>" . $dt["categoryCode"] . "</option>";
            }
        }


        $htmlOption=$this->htmlSelect;
        return view('productOfPeople.create',compact('htmlOption'));
    }



    public function store(Request $request)
    {
        //
        $request->validate([
            'productCode'=> 'required',
            'productName'=> 'required',
            'title'=> 'required',
            'description'=> 'required',
            'price'=> 'required',
            'discount'=> 'required',
            'quantity'=> 'required',
            'warranty'=> 'required',
            'createdBy'=> 'required',
            'categoryID'=> 'required',
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


        ProductPeople::create($input);
        return redirect()->route('productOfPeople.index')->with('success','Add Product Successful');

    }


    public function show(ProductPeople $product)
    {
        return view('productOfPeople.show',compact('product'));
    }


    public function edit(ProductPeople $product)
    {

        $categories=category::all();
        foreach ($categories as $dt) {
            if ($dt['id'] > 0) {
                $this->htmlSelect .= "<option value='{$dt["id"]}'>" . $dt["categoryCode"] . "</option>";
            }
        }

        $htmlOption=$this->htmlSelect;
        return view('productOfPeople.edit',compact('htmlOption','product'));
    }


    public function update(Request $request, ProductPeople $product)
    {
        $request->validate([
            'productCode' => 'required',
            'productName'=> 'required',
            'title'=> 'required',
            'description'=> 'required',
            'price'=> 'required',
            'discount'=> 'required',
            'quantity'=> 'required',
            'warranty'=> 'required',
            'createdBy'=> 'required',
            'categoryID'=> 'required',
            'status'=>'required',
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
        $product->update($input);
        return redirect()->route('productOfPeople.index')->with('success','Update Product successfully');


    }



    public function destroy(ProductPeople $product)
    {
        //
        $product->delete();
        return redirect()->route('productOfPeople.index')->with('success','Delete Product successfully');
    }
}
