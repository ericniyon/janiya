<?php

use App\Http\Controllers\Admin\AffilitesController;
use App\Http\Controllers\Admin\ColorsController;
use App\Http\Controllers\Admin\PartnersController;
use App\Http\Controllers\Admin\ShopsController;
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
    Route::view('/shops','backend.admin.shops')->name('shops');
    Route::view('/shops/add-new-shop','backend.admin.addEditShops')->name('shops.add');
    Route::post('/shops/add-new-shop',[ShopsController::class,'store'])->name('shops.store');
    Route::get('/shops/{vendor}/edit',[ShopsController::class,'edit'])->name('shops.edit');
    Route::put('/shops/{vendor}/update',[ShopsController::class,'update'])->name('shops.update');

    // users & Partners
    Route::view('partners','backend.admin.partners')->name('partners');
    Route::view('/partners/add-new-shop','backend.admin.addEditpartner')->name('partners.add');
    Route::post('/partners/add-new-shop',[PartnersController::class,'store'])->name('partners.store');
    Route::get('/partners/{user}/edit',[PartnersController::class,'edit'])->name('partners.edit');
    Route::put('/partners/{user}/update',[PartnersController::class,'update'])->name('partners.update');

    // Affiliator
    Route::get('affiliators',[AffilitesController::class,'index'])->name('affiliator');
});

// Vendor's routes
Route::middleware(['auth:vendor','confirmed','active'])->prefix('vendor')->name('vendor.')->group(function(){
    Route::view('/dashboard','backend.vendors.index')->name('dashboard');
});

// Normal Users's routes
Route::middleware('auth')->group(function(){
    // Route::view('/my-orders')->name('orders');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
