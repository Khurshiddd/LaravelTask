<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::id();
        $products = Product::all();
        $categories = Category::where('user_id',$user)->get();
        return view('US.product.index',compact('categories', 'products'));
    }


    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();
        $data['image'] = Storage::put('/images',$data['image']);
        Product::firstOrCreate($data);
        return redirect()->back();
    }


    public function show(Product $product)
    {
        return view('US.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $user = Auth::id();
        $categories = Category::where('user_id',$user)->get();
        return view('US.product.edit', compact('product', 'categories'));
    }


    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();
        if($request->hasFile('image')){
            Storage::delete($product->image);
        }
        $data['image'] = Storage::put('images/', $data['image']);
        $product->updateOrFail($data);
        return redirect()->route('indexProduct');
    }


    public function destroy(Product $product)
    {
        if(isset($product->image)){
            Storage::delete($product->image);
        }
        $product->delete();
        return redirect()->back();
    }
}
