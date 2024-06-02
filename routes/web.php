<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Routes
Route::prefix('admin')->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admindashboard');
});

Route::get('/addproducts', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('addproducts');
Route::get('/showproducts', [App\Http\Controllers\Admin\ProductController::class, 'show'])->name('showproducts');
