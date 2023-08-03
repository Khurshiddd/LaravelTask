<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ProductController::class, 'index'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Category
Route::middleware('auth')->group(function () {
    Route::get('/category', [CategoryController::class,'index'])->name('indexCategory');
    Route::post('/category', [CategoryController::class, 'store'])->name('storeCategory');
    Route::get('/category/{category}',[CategoryController::class,'show'])->name('showCategory');
    Route::get('/{category}/category',[CategoryController::class,'edit'])->name('editCategory');
    Route::put('/category/{category}',[CategoryController::class,'update'])->name('updateCategory');
    Route::delete('{category}',[CategoryController::class,'destroy'])->name('deleteCategory');
});
// Product
Route::get('/product', [ProductController::class,'index'])->name('indexProduct');
Route::middleware('auth')->group(function () {
    Route::post('/product', [ProductController::class, 'store'])->name('storeProduct');
    Route::get('/product/{product}',[ProductController::class,'show'])->name('showProduct');
    Route::get('/{product}/product',[ProductController::class,'edit'])->name('editProduct');
    Route::put('/product/{product}',[ProductController::class,'update'])->name('updateProduct');
    Route::delete('/product/delete/{product}',[ProductController::class,'destroy'])->name('deleteProduct');
});

require __DIR__.'/auth.php';
