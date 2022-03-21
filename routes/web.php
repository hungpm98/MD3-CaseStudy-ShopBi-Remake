<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layoutfrontend.master');
});

Route::get('shop', function () {
    return view('layoutbackend.master');
});

Route::prefix('products')->group(function () {
Route::get('index',[ProductController::class,'index'])->name('products.index');
Route::get('create',[ProductController::class,'create'])->name('products.showFormCreate');
Route::post('create',[ProductController::class,'store'])->name('products.create');
Route::get('{id}/update',[ProductController::class,'edit'])->name('products.showFormUpdate');
Route::post('{id}/update',[ProductController::class,'update'])->name('products.update');
Route::get('{id}/detail',[ProductController::class,'show'])->name('products.detail');
Route::get('{id}/delete',[ProductController::class,'destroy'])->name('products.delete');


});
