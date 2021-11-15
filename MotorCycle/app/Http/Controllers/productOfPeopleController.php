<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;


class productOfPeopleController extends Controller
{
    private $htmlSelect ;
public function __constructor(){
    $this->htmlSelect;
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$productOfPeople=DB::table('products')->where('productType','0');
        $products=product::latest()->where('productType','0')->paginate(45);
        return view('productOfPeople.indexOfPeople',compact('products'))->with('i',(\request()->input('page',1)-1)*5);
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
        return view('productOfPeople.create',compact('htmlOption'));
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
        return redirect()->route('productOfPeople.index')->with('success','Add Product Successfully');


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
        return view('productOfPeople.show',compact('product'));
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
        return view('productOfPeople.update',compact('htmlOption','product'));
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
        $this->updateAll($request,$product);

        return redirect()->route('productOfPeople.index')->with('success','Update Product successfully');


    }
    public function updateAll(Request $request,product $product){
        $request->validate([


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
    public function destroy(product $product)
    {
        //
        $product->delete();
        return redirect()->route('productOfPeople.index')->with('success','Delete Product successfully');
    }
}
