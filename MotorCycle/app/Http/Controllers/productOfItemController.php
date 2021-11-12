<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class productOfItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::latest()->where('productType', '1')->paginate(5);
        return view('product.indexOfItems', compact('products'))->with('i', (\request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=category::all(['id','categoryCode']);
        foreach ($categories as $dt) {
            if ($dt['id'] > 0) {
                $this->htmlSelect .= "<option value='{$dt["id"]}'>" . $dt["categoryCode"] . "</option>";
            }
        }


        $htmlOption=$this->htmlSelect;
        return view('product.create',compact('htmlOption'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
//        $request->validate([
//            'productCode'=> 'required',
//            'productName'=> 'required',
//            'title'=> 'required',
//            'description'=> 'required',
//            'price'=> 'required',
//            'discount'=> 'required',
//            'quantity'=> 'required',
//            'warranty'=> 'required',
//            'createBy'=> 'required',
//            'categoryID'=> 'required',
//            'productType'=> 'required',
//            'status',
//        ]);
//
//        product::create($request->all());
//        return redirect()->route('productOfItems.index')->with('success','Add Product Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
        $categories=category::all(['id','categoryCode']);
        foreach ($categories as $dt) {
            if ($dt['id'] > 0) {
                $this->htmlSelect .= "<option value='{$dt["id"]}'>" . $dt["categoryCode"] . "</option>";
            }
        }


        $htmlOption=$this->htmlSelect;
        return view('product.update',compact('htmlOption','product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
//        $request->validate([
//            'productCode'=> 'required',
//            'productName'=> 'required',
//            'title'=> 'required',
//            'description'=> 'required',
//            'price'=> 'required',
//            'discount'=> 'required',
//            'quantity'=> 'required',
//            'warranty'=> 'required',
//            'createBy'=> 'required',
//            'categoryID'=> 'required',
//            'productType'=> 'required',
//            'status'
//        ]);
//
//        $product->update($request->all());
//        return redirect()->route('productOfItems.index')->with('success','Update Product Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
//        $product->delete();
//        return redirect()->route('productOfItems.index')->with('success','Update Product Successfully');

    }
}
