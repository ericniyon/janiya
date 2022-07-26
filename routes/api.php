<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ApiAuthController;
use App\Http\Controllers\Api\ApiVendorAuthController;
use App\Http\Controllers\Api\ApiAdminAuthController;
use App\Http\Controllers\Api\Admin\AdminController;
use App\Http\Controllers\Api\Admin\PartnersController;
use App\Http\Controllers\Api\Admin\ShopController;
use App\Http\Controllers\Api\Admin\AffiliateController;
use App\Http\Controllers\Api\Vendor\StoreController;
use App\Http\Controllers\Api\Vendor\AccountController;
use App\Http\Controllers\Api\ProAttController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group([

    'middleware' => 'api',
    'prefix' => 'user'

], function ($router) {

    Route::post('/login', [ApiAuthController::class,'login']);
    Route::post('/register', [ApiAuthController::class,'register']);
    Route::get('/logout', [ApiAuthController::class,'logout']);

    Route::post('/forgot-password',[ApiAuthController::class, 'sendRestLink']);
    Route::post('/pin-check',[ApiAuthController::class, 'checkPin']);
    Route::post('/reset-password',[ApiAuthController::class, 'resetPassword']);

});

Route::group([

    'middleware' => 'api',
    'prefix' => 'vendor'

], function ($router) {

    Route::post('/login', [ApiVendorAuthController::class,'login']);
    Route::post('/register', [ApiVendorAuthController::class,'register']);
    Route::get('/logout', [ApiVendorAuthController::class,'logout']);

    Route::post('/forgot-password',[ApiVendorAuthController::class, 'sendRestLink']);
    Route::post('/pin-check',[ApiVendorAuthController::class, 'checkPin']);
    Route::post('/reset-password',[ApiVendorAuthController::class, 'resetPassword']);

    Route::get('/single/{id}/product',[StoreController::class,'singleProduct']);
});


Route::group([

    'middleware' => 'api',
    'prefix' => 'admin'

], function ($router) {

    Route::post('/login', [ApiAdminAuthController::class,'login']);
    Route::get('/logout', [ApiAdminAuthController::class,'logout']);

    Route::post('/forgot-password',[ApiAdminAuthController::class, 'sendRestLink']);
    Route::post('/pin-check',[ApiAdminAuthController::class, 'checkPin']);
    Route::post('/reset-password',[ApiAdminAuthController::class, 'resetPassword']);

    Route::get('/allTransaction', [AdminController::class,'all_transaction']);
    Route::post('/newShop', [ShopController::class,'store']);
    Route::post('/updateShop/{id}', [ShopController::class,'edit']);
    Route::delete('/deleteShop/{id}', [ShopController::class,'delete']);

    Route::get('/affiliators', [AffiliateController::class,'viewAll']);
    Route::get('/partners', [PartnersController::class,'viewAll']);
    Route::post('/createPartner', [PartnersController::class,'store']);

    Route::get('shops-orders',[PartnersController::class,'shopsOrder']);
    Route::get('janiya-orders',[PartnersController::class,'janiyaOrders']);

    Route::post('newAttribute',[StoreController::class,'newAttribute']);
});

//other route
Route::group([

    'middleware' => 'api'

], function ($router) {
    //product route
    Route::post('/addProduct', [ProductController::class,'store']);
    Route::get('/products', [ProductController::class,'show']);
    Route::delete('/productDelete/{id}', [ProductController::class,'deleteProduc']);
    Route::post('/productUpdate/{id}', [ProductController::class,'updateProduct']);
    //category route
    Route::post('/addCategory', [CategoryController::class,'store']);
    Route::get('/categories', [CategoryController::class,'show']);
    //color and size route
    Route::post('/addColor', [ProAttController::class,'save_color']);
    Route::get('/colors', [ProAttController::class,'showColor']);
    Route::delete('/deleteColor/{id}', [ProAttController::class,'delete_color']);

    Route::post('/addSize', [ProAttController::class,'save_size']);
    Route::delete('/deleteSize/{id}', [ProAttController::class,'delete_size']);
    Route::get('/size', [ProAttController::class,'showSize']);
    //Shops route
    Route::get('/shops', [ShopController::class,'show']);
    Route::get('/becameAffiliator',[AccountController::class,'becomeAffiliate']);
    Route::post('/changePassword',[AccountController::class,'updatePassword']);
    Route::post('/updateProfile',[AccountController::class,'updateProfile']);
    Route::get('/test',[AccountController::class,'clientOrder']);
});

