<?php

use App\Http\Controllers\Admin\AffilitesController;
use App\Http\Controllers\Admin\ColorsController;
use App\Http\Controllers\Admin\PartnersController;
use App\Http\Controllers\Admin\ShopsController;
use App\Http\Controllers\Admins\AdminController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Size;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Vendors\StoresController;

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








// products routes

Route::get('product/category', [AdminController::class, 'product_category'] )->name('product-category');
Route::post('save-category', [AdminController::class, 'save_category'] )->name('save-category');


// products routes

Route::get('product/product', [AdminController::class, 'product_product'] )->name('add-product');
Route::get('shop-product', [HomeController::class, 'shop'] )->name('shop');
Route::get('product_details/{id}', [HomeController::class, 'product_details'] )->name('product_details');



// all about colors
Route::get('colors', [ColorsController::class, 'colors'] )->name('colors');
Route::post('save-color', [ColorsController::class, 'save_colors'] )->name('save-color');


// all about size
Route::get('sizes', [Size::class, 'size'] )->name('size');
Route::post('save-size', [Size::class, 'save_size'] )->name('save-size');

// cart
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [CartController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove.from.cart');

// checkout
Route::get('checkout', [CheckoutController::class, 'checkout'])->name('checkout');



Route::post('purchase', [CheckoutController::class, 'payment'])->name('purchase');
Route::get('proccesspayment', [CheckoutController::class, 'proccess']);


// Admin's routes
Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function(){


    Route::get('/admin/dashboard', function () {
        return view('backend.pages.admin_dashboard');
    })->name('admin.dashboard');


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
    Route::get('store/add-products',[StoresController::class,'index'])->name('store');
    Route::view('store/my-shop','backend.vendors.shop')->name('shop');
});

// Normal Users's routes
Route::middleware('auth')->group(function(){
    // Route::view('/my-orders')->name('orders');
});

Route::get('/dashboard', function () {
    return view('backend.pages.admin_dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
