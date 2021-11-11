<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $galleries=galleryController::latest()->paginate(5);
        return view('galleryController.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('galleryController.create');
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
            'thumbnails'=>'required',
            'image'=>'required',
            'productID'=>'required',


        ]);
        galleryController::create($request->all());
        return redirect()->route('galleryController.index',compact(gallery))->with('success','Add Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(galleryController $gallery)
    {
        //
        $gallery->delete();
        return redirect()->route('galleryController.index',compact(gallery))->with('success','Delete Successfully');
    }
}
