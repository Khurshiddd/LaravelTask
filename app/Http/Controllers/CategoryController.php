<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
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
        $data['user_id'] = Auth::id();
        Category::firstOrCreate($data);
        return redirect()->back();
    }


    public function show(Category $category)
    {
        return view('US.categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('US.categories.edit', compact('category'));
    }


    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        return redirect()->route('index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back();
    }
}
