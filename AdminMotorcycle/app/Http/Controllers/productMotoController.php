<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;



class productMotoController extends Controller
{
    private $htmlSelect ;
    public function __constructor(){
        $this->htmlSelect;
    }

    public function index()
    {
        $products = product::latest()->where('productType', '1')->paginate(50);
        return view('productMoto.index', compact('products'))->with('i', (\request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {

        $categories=category::all(['id','categoryCode']);
        foreach ($categories as $dt) {
            if ($dt['id'] > 0) {
                $this->htmlSelect .= "<option value='{$dt["id"]}'>" . $dt["categoryCode"] . "</option>";
            }
        }


        $htmlOption=$this->htmlSelect;
        return view('productMoto.create',compact('htmlOption'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'productCode'=> 'required|unique:products',
            'productName'=> 'required',
            'title'=> 'required',
            'price'=> 'required',
            'discount'=> 'required',
            'quantity'=> 'required',
            'warranty'=> 'required',
            'createdBy'=> 'required',
            'categoryID'=> 'required',
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
        return redirect()->route('productMoto.index')->with('success','Add Product Successfully');
    }


    public function show(product $product,$id)
    {

        $product = product::findOrFail($id);
        return view('productMoto.show',compact('product'));
    }


    public function edit(product $product,$id)
    {

        $categories=category::all();
        foreach ($categories as $dt) {
            if ($dt['id'] > 0) {
                $this->htmlSelect .= "<option value='{$dt["id"]}'>" . $dt["categoryCode"] . "</option>";
            }
        }
        $htmlOption=$this->htmlSelect;
        $product = product::findOrFail($id);

        return view('productMoto.edit',compact('htmlOption','product'));

    }


    public function update(Request $request,$id)
    {

        $request->validate([
            'productName'=> 'required',
            'title'=> 'required',
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
        }else{
            unset($input['image']);
        }

        $product = product::findOrFail($id);

        $product->update($input);
        return redirect()->route('productMoto.index')->with('success','Update Product successfully');

    }


    public function destroy(product $product,$id)
    {

        $product = product::findOrFail($id);
        $product->delete();
        return redirect()->route('productMoto.index')->with('success','Update Product Successfully');

    }
}
