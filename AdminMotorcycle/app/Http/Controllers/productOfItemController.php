<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\ProductMotor;
use App\Models\ProductPeople;
use Illuminate\Http\Request;


class productOfItemController extends Controller
{
    private $htmlSelect ;
    public function __constructor(){
        $this->htmlSelect;
    }

    public function index()
    {
        $product_motor = ProductMotor::latest()->where('productType', 'Items for Motor')->paginate(50);
        return view('productOfPeople.index', compact('product_motor'))->with('i', (\request()->input('page', 1) - 1) * 5);
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
        return view('productOfItems.create',compact('htmlOption'));
    }


    public function store(Request $request)
    {

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
            'productType'=> 'required',
            'status'=>'required',
        ]);


        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }


        ProductMotor::create($input);
        return redirect()->route('productOfPeople.index')->with('success','Add Product Successfully');
    }


    public function show(ProductMotor $product)
    {

        return view('productOfItems.show',compact('product'));
    }


    public function edit(ProductMotor $product)
    {

        $categories=category::all(['id','categoryCode']);
        foreach ($categories as $dt) {
            if ($dt['id'] > 0) {
                $this->htmlSelect .= "<option value='{$dt["id"]}'>" . $dt["categoryCode"] . "</option>";
            }
        }


        $htmlOption=$this->htmlSelect;
        return view('productOfItems.update',compact('htmlOption','product'));

    }


    public function update(Request $request, ProductMotor $product)
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductMotor $product)
    {

        $product->delete();
        return redirect()->route('productOfPeople.index')->with('success','Update Product Successfully');

    }
}
