<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{

    public function index(Request $request)
    {
        if($request->has('search')){
            $search = $request->input('search');
            $categories = category::search($search)->paginate(60);

            return view('category.view', compact('categories'));
        }
        $categories = category::whereNull('parent_id')->with('children')->paginate(10);

        return view('category.view', compact('categories'));
    }


    public function create()
    {
        $categories = category::whereNull('parent_id')->get();

        return view('category.create', compact('categories'));
    }


    public function store(Request $request)
    {
        $fileLogo = $request->file('logo');
        $fileNameLogo = uniqid() . '_' . $fileLogo->getClientOriginalName();
        $fileLogo->move('images/categories/logos', $fileNameLogo);
        $fileImage = $request->file('image');
        $fileNameImage = uniqid() . '_' . $fileImage->getClientOriginalName();
        $fileImage->move('images/categories/images', $fileNameImage);
        Category::create([
            'categoryName' => $request->input('categoryName'),
            'description' => $request->input('description'),
            'logo' => $fileNameLogo,
            'image' => $fileNameImage,
            'parent_id' => $request->input('parent_id'),
        ]);

        return redirect()->route('admin.category.index')->with('add_success', trans('admin.message.add_success'));
    }


    public function show($cateId, Request $request)
    {
        if ($request->has('min_pri') && $request->has('max_pri')) {
            $min = $request->input('min_pri');
            $max = $request->input('max_pri');
            $categories = category::all();
            $cate = category::findOrFail($cateId);
            $products = product::where('cate_id', $cateId)->pricebetween($min, $max)->paginate(12);
            return view('category.show', compact('cate', 'categories', 'products'));
        }
        $filter = $request->input('filter');
        switch ($filter) {
            case 'newest':
                $categories = category::all();
                $products = product::where('cate_id', $cateId)->newest()->paginate(12);
                $cate = category::findOrFail($cateId);
                return view('category.show', compact('cate', 'categories', 'products'));
                break;
            case 'viewest':
                $categories = category::all();
                $products = product::where('cate_id', $cateId)->viewest()->paginate(12);
                $cate = category::findOrFail($cateId);
                return view('category.show', compact('cate', 'categories', 'products'));
                break;
            case 'best_discount':
                $categories = category::all();
                $products = product::where('cate_id', $cateId)->viewest()->paginate(12);
                $cate = category::findOrFail($cateId);
                return view('category.show', compact('cate', 'categories', 'products'));
                break;
            case 'saling':
                $categories = category::all();
                $products = product::where('cate_id', $cateId)->saling()->paginate(12);
                $cate = category::findOrFail($cateId);
                return view('category.show', compact('cate', 'categories', 'products'));
                break;
            case 'Ascending':
                $categories = category::all();
                $products = product::where('cate_id', $cateId)->ascending()->paginate(12);
                $cate = category::findOrFail($cateId);
                return view('category.show', compact('cate', 'categories', 'products'));
                break;
            case 'Decrease':
                $categories = category::all();
                $products = product::where('cate_id', $cateId)->decrease()->paginate(12);
                $cate = category::findOrFail($cateId);
                return view('category.show', compact('cate', 'categories', 'products'));
                break;
            default:
                $categories = category::all();
                $products = product::where('cate_id', $cateId)->nameproduct($filter)->paginate(12);
                $cate = category::findOrFail($cateId);
                return view('category.show', compact('cate', 'categories', 'products'));
                break;
        };
        $categories = category::all();
        $cate = category::findOrFail($cateId);
        $products = product::where('cate_id', $cateId)->paginate(12);

        return view('category.show', compact('cate', 'categories', 'products'));
    }


    public function edit($cateId)
    {
        $cate = category::findOrFail($cateId);
        $categories = category::whereNull('parent_id')->get();

        return view('category.edit', compact('cate', 'categories'));
    }


    public function update(Request $request, $cateId)
    {
        $cate = category::findOrFail($cateId);

        $fileLogo = $request->file('logo');
        $fileNameLogo = uniqid() . '_' . $fileLogo->getClientOriginalName();
        $fileLogo->move('images/categories/logos', $fileNameLogo);
        $fileImage = $request->file('image');
        $fileNameImage = uniqid() . '_' . $fileImage->getClientOriginalName();
        $fileImage->move('images/categories/images', $fileNameImage);

        $cate->categoryName = $request->input('categoryName');
        $cate->description = $request->input('description');
        $cate->image = $fileNameImage;
        $cate->logo = $fileNameLogo;
        $cate->parent_id = $request->input('parent_id');
        $cate->save();

        return redirect()->route('admin.category.index')->with('update_success', trans('admin.message.update_success'));
    }


    public function destroy($cateId)
    {
        $cate = category::findOrFail($cateId);
        if($cate->parent_id == null){
            $cate->children()->delete();
            $cate->products()->delete();
            $cate->delete();
        }

        return redirect()->route('admin.category.index')->with('del_success', trans('admin.message.del_success'));
    }
}
