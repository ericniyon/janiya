<?php

use App\Http\Controllers\Admin\ColorsController;
use App\Http\Controllers\Admins\AdminController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Size;

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

// Frontend routes
Route::get('/', [HomeController::class, 'index'] )->name('home');



Route::get('/admin/dashboard', function () {
    return view('backend.pages.admin_dashboard');
})->name('admin.dashboard');


Route::get('/add-product', function () {
    return view('backend.pages.add_product');
});




// products routes

Route::get('product/category', [AdminController::class, 'product_category'] )->name('product-category');
Route::post('save-category', [AdminController::class, 'save_category'] )->name('save-category');

// all about colors
Route::get('colors', [ColorsController::class, 'colors'] )->name('colors');
Route::post('save-color', [ColorsController::class, 'save_colors'] )->name('save-color');


// all about size
Route::get('sizes', [Size::class, 'size'] )->name('size');
Route::post('save-size', [Size::class, 'save_size'] )->name('save-size');



// Admin's routes
Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function(){
    Route::view('/shops','backend.pages.admin.shops')->name('shops');
});

// Vendor's routes
Route::middleware(['auth:vendor','confirmed','active'])->prefix('vendor')->name('vendor.')->group(function(){
    Route::view('/dashboard','backend.pages.admin.shops')->name('dashboard');
});

// Normal Users's routes
Route::middleware('auth')->group(function(){
    Route::view('/my-orders','backend.pages.admin.shops')->name('orders');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
