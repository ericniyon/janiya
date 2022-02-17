<?php

use App\Http\Controllers\Admin\ColorsController;
use App\Http\Controllers\Admins\AdminController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Size;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;

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



Route::get('/admin', function () {
    return view('backend.pages.admin_dashboard');
});





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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
