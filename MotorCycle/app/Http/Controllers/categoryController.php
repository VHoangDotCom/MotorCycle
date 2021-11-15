<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories=category::latest()->paginate(45);
        return view('category.index',compact('categories'))->with('i',(\request()->input('page',1)-1)*5);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('category.create');
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
            'categoryCode'=>'required',
            'title'=>'required',
            'content'=>'required',
            'status'=>'required',
        ]);
        category::create($request->all());
        return redirect()->route('category.index')->with('success','Add Gallery Successfully');
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
    public function edit(category $category)
    {
        //
        return view('category.update',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        //
        $request->validate([

            'categoryCode'=>'required',
            'title'=>'required',
            'content'=>'required',
            'status'=>'required',

        ]);
        $category->update($request->all());
        return redirect()->route('category.index')->with('success','Update Gallery Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
        $category->delete();
        return redirect()->route('category.index')->with('success','Delete Gallery Successfully');
    }
}
