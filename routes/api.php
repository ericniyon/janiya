<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ApiAuthController;
use App\Http\Controllers\Api\ApiVendorAuthController;
use App\Http\Controllers\Api\ApiUserForgotPasswordController;
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

});

Route::group([

    'middleware' => 'api',
    'prefix' => 'vendor'

], function ($router) {

    Route::post('/login', [ApiVendorAuthController::class,'login']);
    Route::post('/register', [ApiVendorAuthController::class,'register']);
    Route::get('/logout', [ApiVendorAuthController::class,'logout']);

});


Route::group([

    'middleware' => 'api',
    'prefix' => 'admin'

], function ($router) {

    Route::post('/login', [ApiAdminAuthController::class,'login']);
    Route::get('/logout', [ApiAdminAuthController::class,'logout']);

});

Route::post(
    '/forgot-password', 
    [ApiUserForgotPasswordController::class, 'forgotPassword']
);
Route::post(
    '/verify/pin', 
    [ApiUserForgotPasswordController::class, 'verifyPin']
);

 
// Route::post('/forgot-password', function (Request $request) {
//     $request->validate(['email' => 'required|email']);
 
//     $status = Password::sendResetLink(
//         $request->only('email')
//     );
 
//     return $status === Password::RESET_LINK_SENT
//                 ? response()->json(['status' => __($status)])
//                 : response()->json(['email' => __($status)]);
// })->middleware('guest')->name('password.email');

// Route::post('/reset-password', function (Request $request) {
//     $request->validate([
//         'token' => 'required',
//         'email' => 'required|email',
//         'password' => 'required|min:8|confirmed',
//     ]);
 
//     $status = Password::reset(
//         $request->only('email', 'password', 'password_confirmation', 'token'),
//         function ($user, $password) {
//             $user->forceFill([
//                 'password' => Hash::make($password)
//             ])->setRememberToken(Str::random(60));
 
//             $user->save();
 
//             event(new PasswordReset($user));
//         }
//     );
 
//     return $status === Password::PASSWORD_RESET
//                 ? response()->json(['message' =>'success'])
//                 : response()->json(['email' => [__($status)]]);
// })->middleware('guest')->name('password.update');