<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::latest()->paginate(5);
        return view('blogs.index',compact('blogs'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function create()
    {
        return view('blogs.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'blogCode' => 'required',
            'title'  => 'required',
            'description' => 'required',
            'image' => 'image',
            'content' => 'required',
            'createdBy' => 'required',
        ]);

        Blog::create($request->all());
        return redirect()->route('blogs.index')->with('success','Created Successful.');
    }


    public function show(Blog $blog )
    {
        return view('blogs.show',compact('blog'));
    }


    public function edit(Blog $blog)
    {
        return view('blogs.edit',compact('blog'));
    }


    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'blogCode' => 'required',
            'title'  => 'required',
            'image' => 'required',
            'description' => 'required',
            'content' => 'required',
            'createdBy' => 'required',

        ]);
        $blog->update($request->all());
        return redirect()->route('blogs.index')->with('success','Updated Successful');
    }


    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success','Blog has been deleted');
    }
}
