<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;



Route::get('/', function () {
    return redirect()->route('products.index');
});



Route::resource('categories', CategoryController::class);



Route::resource('products', ProductController::class);

Route::get('/', function () {
    return view('welcome');
});
