<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Validator;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetApiPassword;

class ApiAdminAuthController extends Controller
{
    /**
     * Create a new ApiAuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:adminApi', ['except' => ['login','sendRestLink','checkPin','resetPassword']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    /**
     * @OA\Post(
     * path="/api/admin/login",
     * summary="Sign in",
     * description="Login by email, password",
     * operationId="authAdminLogin",
     * tags={"Admin Auth"},
     *      @OA\Parameter(
     *          name="email",
     *          description="use email confirmation to be authenticated",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *       ),
     *      @OA\Parameter(
     *          name="password",
     *          description="use password confirmation to be authenticated",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *       ),
     *      @OA\Response(
     *          response=200,
     *          description="Successfull logged in."
     *     ),
     *      @OA\Response(
     *          response=204,
     *          description="Successful operation",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad user Input",
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
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

        if (! $token = auth('adminApi')->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
      /**
     * @OA\Get(
     *      path="/api/admin/logout",
     *      operationId="logoutAdmin",
     *      tags={"Admin Auth"},
     *      summary="Get out of System",
     *      description="Take out of sytem the users",
     *      security={{"bearer_token":{}}},
     *      @OA\Response(
     *          response=204,
     *          description="Successful operation",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad user Input",
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     *     )
     */
    public function logout()
    {
        auth('adminApi')->logout();

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
            'expires_in' => auth('adminApi')->factory()->getTTL() * 60
        ]);
    }


    /**
     * @OA\Post(
     * path="/api/admin/forgot-password",
     * summary="Request reset pin",
     * description="Request by email",
     * operationId="PinReqAdmin",
     * tags={"Admin Auth"},
     *      @OA\Parameter(
     *          name="email",
     *          description="use email to generate pin",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *       ),
     *      @OA\Response(
     *          response=200,
     *          description="Successfull pin request."
     *     ),
     *      @OA\Response(
     *          response=204,
     *          description="Successful operation",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad user Input",
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function sendRestLink(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|exists:admins,email'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $password_reset = \DB::table('password_resets')
                ->where('email', $request->email)
                ->delete();

        $token = random_int(100000, 999999);
        $password_reset = \DB::table('password_resets')->insert([
            'email' =>$request->email,
            'token' =>$token,
            'created_at' => Carbon::now()
        ]);

        if ($password_reset) {
            // Mail::to($request->all()['email'])->send(new ResetApiPassword($token));

            return response()->json(
                [
                    'success' => true,
                    'message' => "Please check your email for a 6 digit pin"
                ],
                200
            );
        }

        return response()->json([
                'message' => 'Successfully set reset link token',
                'token' => $token
            ]);
    }

    /**
     * @OA\Post(
     * path="/api/admin/pin-check",
     * summary="check reset pin",
     * description="check by email, pin",
     * operationId="PinCheckAdmin",
     * tags={"Admin Auth"},
     *      @OA\Parameter(
     *          name="email",
     *          description="use email to check pin",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *       ),
     *      @OA\Parameter(
     *          name="pin",
     *          description="use pin received via email to check if valid",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *       ),
     *      @OA\Response(
     *          response=200,
     *          description="Successfull pin request."
     *     ),
     *      @OA\Response(
     *          response=204,
     *          description="Successful operation",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad user Input",
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function checkPin(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'pin' => 'required|exists:password_resets,token|min:6|max:6',
            'email' => 'required|exists:password_resets,email'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $check = \DB::table('password_resets')->where([
            ['token', $request->all()['pin']],
            ['email', $request->all()['email']],
        ]);

        if ($check->exists()) {
            $difference = Carbon::now()->diffInSeconds($check->first()->created_at);
            if ($difference > 3600) {
                return response()->json(['success' => false, 'message' => "Token Expired"], 400);
            }

            \DB::table('password_resets')->where([
                ['token', $request->all()['pin']],
                ['email', $request->all()['email']],
            ])->delete();
            $token = \Str::random(64);

            \DB::table('password_resets')->insert([
                'email' =>$request->email,
                'token' =>$token,
                'created_at' => Carbon::now()
            ]);

            return response()->json(
                [
                    'success' => true,
                    'message' => "You can now reset your password",
                    'token' => $token,
                ],
                200
                );
        } else {
            return response()->json(
                [
                    'success' => false,
                    'message' => "Invalid token"
                ],
                401
            );
        }
    }

    /**
     * @OA\Post(
     * path="/api/admin/reset-password",
     * summary="reset forgotten password",
     * description="reset password by email, newPassword, and token",
     * operationId="PasswordResetAdmin",
     * tags={"Admin Auth"},
     *      @OA\Parameter(
     *          name="email",
     *          description="use email to reset password",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *       ),
     *      @OA\Parameter(
     *          name="token",
     *          description="use token from check pin request to reset password",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *       ),
     *      @OA\Parameter(
     *          name="password",
     *          description="set new password",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *       ),
     *      @OA\Parameter(
     *          name="password_confirmation",
     *          description="confirm new password",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *       ),
     *      @OA\Response(
     *          response=200,
     *          description="Successfull pin request."
     *     ),
     *      @OA\Response(
     *          response=204,
     *          description="Successful operation",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad user Input",
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'token' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()], 422);
        }

        $check = \DB::table('password_resets')->where([
            ['token', $request->all()['token']],
            ['email', $request->all()['email']],
        ]);

        if (!$check->exists()) {
            return response()->json(
                [
                    'success' => false,
                    'message' => "Invalid token"
                ],
                401
            );
        }

        \DB::table('password_resets')->where([
            ['token', $request->all()['token']],
            ['email', $request->all()['email']],
        ])->delete();

        $user = Admin::where('email',$request->email);
        $user->update([
            'password'=>Hash::make($request->password)
        ]);

        return response()->json(
            [
                'success' => true,
                'message' => "Your password has been reset"
            ],
            200
        );
    }
}
