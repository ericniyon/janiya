<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\Vendor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ApiVendorAuthController extends Controller 
{
    /**
     * Create a new ApiAuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:vendorApi', ['except' => ['login','register']]);
    }

    /**
     * Get a JWT via given credentials.
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (! $token = auth('vendorApi')->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function register(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'shop_name' => ['required', 'string', 'min:3', 'max:120', 'unique:vendors'],
            'phone' => ['required', 'string', 'min:10', 'max:12',],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        } 
        $vendor = Vendor::create(array_merge(
            $validator->validated(),
            ['password' =>bcrypt($req->password)]
        ));
        return response()->json([
            'message' => "User successfull registered",
            'user' => $vendor
        ],201);

    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth('vendorApi')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('vendorApi')->factory()->getTTL() * 60
        ]);
    }
}
