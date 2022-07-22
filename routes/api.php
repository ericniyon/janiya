<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ApiAuthController;
use App\Http\Controllers\Api\ApiVendorAuthController;
use App\Http\Controllers\Api\ApiAdminAuthController;
use App\Http\Controllers\Api\Admin\AdminController;
use App\Http\Controller\Api\Admin\ShopController;
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

    Route::post(
        '/forgot-password',
        [ApiAuthController::class, 'sendRestLink']
    );
    Route::post(
        '/pin-check',
        [ApiAuthController::class, 'checkPin']
    );
    Route::post(
        '/reset-password',
        [ApiAuthController::class, 'resetPassword']
    );

});

Route::group([

    'middleware' => 'api',
    'prefix' => 'vendor'

], function ($router) {

    Route::post('/login', [ApiVendorAuthController::class,'login']);
    Route::post('/register', [ApiVendorAuthController::class,'register']);
    Route::get('/logout', [ApiVendorAuthController::class,'logout']);

    Route::post(
        '/forgot-password',
        [ApiVendorAuthController::class, 'sendRestLink']
    );
    Route::post(
        '/pin-check',
        [ApiVendorAuthController::class, 'checkPin']
    );
    Route::post(
        '/reset-password',
        [ApiVendorAuthController::class, 'resetPassword']
    );
});


Route::group([

    'middleware' => 'api',
    'prefix' => 'admin'

], function ($router) {

    Route::post('/login', [ApiAdminAuthController::class,'login']);
    Route::get('/logout', [ApiAdminAuthController::class,'logout']);

    Route::post(
        '/forgot-password',
        [ApiAdminAuthController::class, 'sendRestLink']
    );
    Route::post(
        '/pin-check',
        [ApiAdminAuthController::class, 'checkPin']
    );
    Route::post(
        '/reset-password',
        [ApiAdminAuthController::class, 'resetPassword']
    );

    Route::get('/allTransaction', [AdminController::class,'all_transaction']);
});

    //product route
    Route::post('/addProduct', [ProductController::class,'store']);
    Route::get('/products', [ProductController::class,'show']);

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
