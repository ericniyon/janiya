<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\Models\Transaction;
use App\Models\ShopOrder;


class PartnersController extends Controller
{
    /**
     * Create a new ApiAuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:adminApi');
    }

    /**
     * @OA\Get(
     *      path="/api/admin/partners",
     *      operationId="getPartners",
     *      tags={"product"},
     *      summary="get partners list",
     *      description="select all partners stored in database",
     *
     *      security={{"bearer_token":{}}},
     *      @OA\Response(
     *          response=200,
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
    public function viewAll()
    {
        $partners = User::whereNotNull('promo_code')->get();
        if ($partners) {
            return response()->json(['status' => true, 'data' => $partners], 200);
        }else {
            return response()->json(['status' => false, 'data' => 'No data to display'], 200);
        }
    }

    /**
     * @OA\Post(
     *      path="/api/admin/createPartner",
     *      operationId="registerPartner",
     *      tags={"product"},
     *      summary="Register new partner",
     *      description="Register new record and return inserted data",
     *      security={{"bearer_token":{}}},
     *
    *     @OA\RequestBody(
    *         @OA\JsonContent(),
    *         @OA\MediaType(
    *            mediaType="multipart/form-data",
    *            @OA\Schema(
    *               type="object",
    *               required={"name","promo_code", "email", "phone", "profile"},
    *               @OA\Property(property="name", type="text"),
    *               @OA\Property(property="promo_code", type="text"),
    *               @OA\Property(property="email", type="text"),
    *               @OA\Property(property="phone", type="text"),
    *               @OA\Property(property="profile", type="file"),
    *            ),
    *        ),
    *    ),
     *      @OA\Response(
     *          response=200,
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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|string|min:3|max:120',
            'promo_code'=>'required|unique:users,promo_code|string|min:3|max:120',
            'email'=>'required|unique:users,email|email|string|min:5|max:120',
            'phone'=>'required|unique:users,phone|string|min:10|max:12',
            'profile'=>'nullable|image|mimes:png,jpg,webp|max:700',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $password = str()->random(8);
        if ($request->file('profile')) {
            $fileName = str()->slug($request->promo_code).time().'.'.$request->profile->extension();
            $profile = $request->profile->storeAs('vendors',$fileName,'public');
        }
        $results = User::create([
            'name'=>$request->name,
            'promo_code'=>$request->promo_code,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'profile'=>$profile,
            'password'=>Hash::make($password),
        ]);
        if ($results) {
            return response()->json(['status' => true, 'data' => $results], 200);
        }else {
            return response()->json(['status' => false, 'data' => 'No data inserted'], 200);
        }
    }

    /**
     * @OA\Get(
     *      path="/api/admin/shops-orders",
     *      operationId="getShopOrder",
     *      tags={"product"},
     *      summary="get shop order list",
     *      description="select all shop order stored in database",
     *
     *      security={{"bearer_token":{}}},
     *      @OA\Response(
     *          response=200,
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
    public function shopsOrder()
    {
        $orders = ShopOrder::all();
        if ($orders) {
            return response()->json(['status' => true, 'data' => $orders], 200);
        }else {
            return response()->json(['status' => false, 'data' => 'No data to display'], 200);
        }
    }

    /**
     * @OA\Get(
     *      path="/api/admin/janiya-orders",
     *      operationId="getJaniyaOrder",
     *      tags={"product"},
     *      summary="get janiya order list",
     *      description="select all janiya order stored in database",
     *
     *      security={{"bearer_token":{}}},
     *      @OA\Response(
     *          response=200,
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
    public function janiyaOrders()
    {
        $transactions = Transaction::all();
        if ($transactions) {
            return response()->json(['status' => true, 'data' => $transactions], 200);
        }else {
            return response()->json(['status' => false, 'data' => 'No data to display'], 200);
        }
    }
}
