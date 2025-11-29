<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CategoryController::class, 'index']);

Route::get('/product', function () {
    return view('product');
});

Route::get('/category', function () {
    return view('category');
});
