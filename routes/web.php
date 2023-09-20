<?php
namespace App\Http\Controllers;

use App\Models\Category;
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
// ---------------for categories------------------

Route::get('/home', function () {
    return view('backend.home');
})->name('dashboard');


Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');


Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');



Route::get('/categories/{category}',[CategoryController::class,'show'])->name('categories.show');

// --------------------for products---------------------

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');


Route::post('/products', [ProductController::class, 'store'])->name('products.store');



Route::get('/products/{product}',[ProductController::class,'show'])->name('products.show');





/*Route::get('/table', function () {
    return view('backend.table');
});*/



