<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
class ReviewController extends Controller
{

    public function index()
    {
        $reviews = product::with('reviews')->get();

        return view('reviews.view', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Review::create([
            'user_id' => Auth::user()->user_id,
            'pro_id' => $request->input('pro_id'),
            'comment' => $request->input('comment'),
            'rate' => $request->input('rate'),
        ]);

        return redirect()->back();
    }


    public function show($id)
    {
        $rev = product::findOrFail($id);

        return view('reviews.show', compact('rev'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->back();
    }
}
