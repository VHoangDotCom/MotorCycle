<?php

namespace App\Http\Controllers;
use App\Models\gallery;
use App\Models\product;
use Illuminate\Http\Request;

class galleryController extends Controller
{

    public function index()
    {
        //
        $galleries=gallery::latest()->paginate(50);
        return view('gallery.index',compact('galleries'))->with('i',(\request()->input('page',1)-1)*5);
    }

    public function create($id)
    { $productID = product::find($id);
        $products=product::latest()->get();

        return view('gallery.create',compact(['products','productID']));
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'thumbnails'=>'required',
            'image'=>'required',
            'productID'=>'required',

        ]);
        galleryController::create($request->all());
        return redirect()->route('galleryController.index',compact(gallery))->with('success','Add Successfully');
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\Models\gallery $gallery)
    {
        //
        return view('galleryController.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, galleryController $gallery)
    {
        //
        $request->validate([
            'thumbnails'=>'required',
            'image'=>'required',
            'productID'=>'required',


        ]);
        $gallery->update($request->all());
        return redirect()->route('galleryController.index',compact(gallery))->with('success','Update Successfully');

    }


    public function destroy(galleryController $gallery)
    {
        //
        $gallery->delete();
        return redirect()->route('galleryController.index',compact(gallery))->with('success','Delete Successfully');
    }
}
