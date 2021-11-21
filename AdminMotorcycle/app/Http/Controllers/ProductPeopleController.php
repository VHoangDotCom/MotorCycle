<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\ProductPeople;
use Illuminate\Http\Request;

class ProductPeopleController extends Controller
{

    private $htmlSelect ;
    public function __constructor(){
        $this->htmlSelect;
    }

    public function index()
    {
        $products=ProductPeople::latest()->where('productType','Product for People')->paginate(80);
        return view('productPeople.index',compact('products'))->with('i',(request()->input('page',1)-1)*5);
    }


    public function create()
    {
        $categories=category::all();
        foreach ($categories as $dt) {
            if ($dt['id'] > 0) {
                $this->htmlSelect .= "<option value='{$dt["id"]}'>" . $dt["categoryCode"] . "</option>";
            }
        }

        $htmlOption=$this->htmlSelect;
        return view('productPeople.create',compact('htmlOption'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'productCode'=> 'required',
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
        }


        ProductPeople::create($input);
        return redirect()->route('productPeople.index')->with('success','Add Product Successful');

    }


    public function show(ProductPeople $product,$id)
    {
        $product = ProductPeople::findOrFail($id);
        return view('productPeople.show',compact('product'));
    }


    public function edit(ProductPeople  $product,$id)
    {
        $categories=category::all();
        foreach ($categories as $dt) {
            if ($dt['id'] > 0) {
                $this->htmlSelect .= "<option value='{$dt["id"]}'>" . $dt["categoryCode"] . "</option>";
            }
        }
        $htmlOption=$this->htmlSelect;
        $product = ProductPeople::findOrFail($id);
        return view('productPeople.edit',compact('product','htmlOption'));
    }

//    public function edit($id){
//        // Tìm đến đối tượng muốn update
//
//
//        $product = ProductPeople::findOrFail($id);
//
//        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
//        return view('productPeople.edit', compact('product'));
//    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'productName'=> 'required',
            'title'=> 'required',
            'description'=> 'required',
            'price'=> 'required',
            'discount'=> 'required',
            'quantity'=> 'required',
            'warranty'=> 'required',
            'createdBy'=> 'required',
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

        $product = ProductPeople::findOrFail($id);

        ProductPeople::update($input);
        echo"success update user";

        return redirect()->route('productPeople.index')->with('success','Update Product successfully');

    }


    public function destroy(ProductPeople $product , $id)
    {
        $product = ProductPeople::findOrFail($id);
        $product->delete();
        return redirect()->route('productPeople.index')->with('success','Delete Product successfully');
    }
}
