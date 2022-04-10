<?php

use App\Http\Controllers\Admin\AffilitesController;
use App\Http\Controllers\Admin\ColorsController;
use App\Http\Controllers\Admin\PartnersController;
use App\Http\Controllers\Admin\ProductsController;
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
Route::get('/', [HomeController::class, 'index'])->middleware('referral')->name('home');

// products routes
Route::get('shop/products', [HomeController::class, 'shop'] )->middleware('referral')->name('shop');
Route::get('shops',[HomeController::class,'shopsList'])->name('shops.list');
// Route::view('/shops','frontend.pages.shops-list')->name('shops.list');
Route::get('shops/{vendor}',[HomeController::class,'singleShop'])->name('shops.list.single');
// Route::get('shop/{vendor}/{product}', [HomeController::class, 'product_details'] )->name('product_details');
Route::get('shop/{vendor}/{product}',[HomeController::class,'singleProduct'])->name('product.single');
// cart
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::post('add-to-cart/{product}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [CartController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove.from.cart');

// checkout
Route::get('checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::get('guest-checkout', [CheckoutController::class, 'checkout'])->name('checkout.guest');
Route::post('purchase', [CheckoutController::class, 'payment'])->name('purchase');
Route::view('thankyou','front.thankyou')->name('thankyou');
Route::view('order-cancelled','front.thankyou')->name('cancelled');
Route::get('proccesspayment', [CheckoutController::class, 'proccess']);
Route::get('profile', [AdminController::class, 'profile'] )->name('admin-profile');

// Admin's routes
Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('sizes', [Size::class, 'size'] )->name('size');
    Route::post('save-size', [Size::class, 'save_size'] )->name('save-size');
    Route::delete('save-size/{size}', [Size::class, 'delete_size'] )->name('delete-size');
    Route::get('colors', [ColorsController::class, 'colors'] )->name('colors');
    Route::post('save-color', [ColorsController::class, 'save_colors'] )->name('save-color');
    Route::delete('color/{color}', [ColorsController::class, 'delete_colors'] )->name('delete-color');
    Route::get('product/category', [AdminController::class, 'product_category'] )->name('product-category');
    Route::get('all/orders',[AdminController::class, 'admin_orders'])->name('allorders');
    Route::get('all/transaction',[AdminController::class, 'admin_transactions'])->name('admin-transaction');




    Route::post('save-category', [AdminController::class, 'save_category'] )->name('save-category');
    Route::get('product/product', [AdminController::class, 'product_product'] )->name('add-product');
    Route::view('products','backend.admin.products')->name('products.all');
    Route::get('products/{product}',[ProductsController::class,'show'])->name('products.single');
    Route::put('products/{attribute}',[ProductsController::class,'updateAttribute'])->name('attributtes.update');
    Route::put('update/products/{product}',[ProductsController::class,'updateProduct'])->name('product.update');
    Route::post('products/{product}',[ProductsController::class,'newAttribute'])->name('products.new');
    Route::put('products/{product}/update',[ProductsController::class,'updateProduct'])->name('products.update.item');

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
    // both orders for janiya and shops
    Route::get('shops-orders',[AdminController::class,'shopsOrder'])->name('shops-orders');
    Route::get('janiya-orders',[AdminController::class,'janiyaOrders'])->name('janiya-orders');
});

// Vendor's routes
Route::middleware(['auth:vendor','confirmed','active'])->prefix('vendor')->name('vendor.')->group(function(){
    Route::view('/dashboard','backend.vendors.index')->name('dashboard');
    Route::get('store/add-products',[StoresController::class,'index'])->name('store');
    Route::get('store/products/{product}',[StoresController::class,'shop'])->name('store.single');
    Route::view('store/my-shop','backend.vendors.shop')->name('shop');

    Route::view('orders','backend.vendors.orders')->name('orders');
    Route::get('orders/view/{order}',[StoresController::class,'singleOrder'])->name('orders.single');
    Route::post('my-store/{id}',[StoresController::class,'storeUpdates'])->name('store_update');

    // coupons
    Route::view('coupons','backend.vendors.coupons')->name('coupons');
    // Shopping Cart
    Route::view('shopping-cart', 'backend.vendors.cart')->name('cart');
    Route::view('order-checkout', 'backend.vendors.checkout')->name('checkout');

});

// Normal Users's routes
Route::middleware('auth')->group(function(){
    // Route::view('/my-orders')->name('orders');
    Route::get('/dashboard', function () {return view('frontend.pages.dashboard'); })->name('dashboard');
    Route::put('become-affiate',[HomeController::class, 'becomeAffiliate'])->name('affiliate');
    Route::get('my-orders',[HomeController::class,'orders'])->name('cliet.orders');
    Route::get('my-orders/{order}',[HomeController::class,'singleOrders'])->name('orders.single');
    Route::view('profile', 'frontend.pages.profile')->name('profile');
    Route::put('profile',[HomeController::class, 'updateProfile'])->name('profile.update');
    Route::view('update-password', 'frontend.pages.password')->name('profile.password');
    Route::put('update-password',[HomeController::class, 'updatePassword'])->name('profile.password.update');
});


Route::get('pro/{id}', [HomeController::class, 'al_product_details'] )->name('al_product_details');
Route::get('about', [HomeController::class, 'about'] )->name('about');
Route::get('contact', [HomeController::class, 'contact'] )->name('contact');
Route::get('categories/products/{catId}', [HomeController::class, 'categorised'] )->name('categories-products');
Route::get('shops/products/{shopId}', [HomeController::class, 'shoped'] )->name('shops-products');

Route::get('cart/content',  [CartController::class, 'cartContents'])->name('add-to-cart');

Route::get('invoce', function(){
    return view('email.orderMail');
});


require __DIR__.'/auth.php';


