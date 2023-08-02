<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('US.categories.index', compact('categories'));
    }

    public function store(StoreCategoryRequest $request)
    {
        $data = $request->validated();
        Category::firstOrCreate($data);
        return redirect()->back();
    }


    public function show(Category $category)
    {
        return view('US.categories.show', compact('category'));
    }
    

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        dd($request);
    }

    public function destroy(Category $category)
    {
        //
    }
}
