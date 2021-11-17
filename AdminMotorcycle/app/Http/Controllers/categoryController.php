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
        $categories=category::latest()->paginate(50);
        return view('category.index',compact('categories'))->with('i',(\request()->input('page',1)-1)*5);

    }


    public function create()
    {
        //
        return view('category.create');
    }


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


    public function show($id)
    {
        //
    }


    public function edit(category $category)
    {
        //
        return view('category.update',compact('category'));
    }


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
