<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ApiAuthController;
use App\Http\Controllers\Api\ApiVendorAuthController;
use App\Http\Controllers\Api\ApiAdminAuthController;
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
    'prefix' => 'admin'

], function ($router) {

    Route::post('/login', [ApiAdminAuthController::class,'login']);
    Route::get('/logout', [ApiAdminAuthController::class,'logout']);

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