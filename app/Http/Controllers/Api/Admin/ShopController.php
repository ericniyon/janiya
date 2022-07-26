<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Validator;

class ShopController extends Controller
{
    /**
     * Create a new ApiAuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:adminApi', ['except' => ['show']]);
    }

    /**
     * @OA\Get(
     *      path="/api/shops",
     *      operationId="getShop",
     *      tags={"product"},
     *      summary="get shops list",
     *      description="select all shops stored in database",
     *
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
    public function show()
    {
        $shops = Vendor::orderBy('created_at', 'DESC')->get();
        if ($shops) {
            return response()->json(['status' => true, 'data' => $shops], 200);
        }else {
            return response()->json(['status' => false, 'data' => 'No data to display'], 200);
        }
    }

    /**
     * @OA\Post(
     *      path="/api/admin/newShop",
     *      operationId="registerShop",
     *      tags={"product"},
     *      summary="Register new shop",
     *      description="Register new record and return inserted data",
     *      security={{"bearer_token":{}}},
     *
    *     @OA\RequestBody(
    *         @OA\JsonContent(),
    *         @OA\MediaType(
    *            mediaType="multipart/form-data",
    *            @OA\Schema(
    *               type="object",
    *               required={"name","shop", "email", "phone", "details"},
    *               @OA\Property(property="name", type="text"),
    *               @OA\Property(property="shop", type="text"),
    *               @OA\Property(property="email", type="text"),
    *               @OA\Property(property="phone", type="text"),
    *               @OA\Property(property="details", type="text"),
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
            'shop'=>'required|unique:vendors,shop_name|string|min:3|max:120',
            'email'=>'required|email|string|min:5|max:120',
            'phone'=>'required|string|min:10|max:12',
            'details'=>'required|string|min:20',
            'profile'=>'nullable|image|mimes:png,jpg,webp|max:700',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $password = "shop@123";
        $profile=null;
        if ($request->file('profile')) {
            $fileimg = $request->file('profile');
            $profile = $request->file('profile')->move('vendors/', str()->slug($request->shop).time().'.'.$request->profile->extension());
        }
        $data = Vendor::create([
            'name'=>$request->name,
            'shop_name'=>$request->shop,
            'slug'=>str()->slug($request->shop),
            'email'=>$request->email,
            'phone'=>$request->phone,
            'confirmed'=>1,
            'active'=>1,
            'details'=>$request->details,
            'profile'=>$profile,
            'password'=>Hash::make($password),
        ]);
        return response()->json(['status' => true, 'data' => 'Shop have been generated successfully','data' => $data], 200);
    }

    /**
     * @OA\Post(
     *      path="/api/admin/updateShop/{id}",
     *      operationId="updateShop",
     *      tags={"product"},
     *      summary="modify shop information",
     *      description="update the shop information",
     *      security={{"bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="enter id of shop to update",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *       ),
     *
    *     @OA\RequestBody(
    *         @OA\JsonContent(),
    *         @OA\MediaType(
    *            mediaType="multipart/form-data",
    *            @OA\Schema(
    *               type="object",
    *               required={"name","shop", "email", "phone", "details"},
    *               @OA\Property(property="name", type="text"),
    *               @OA\Property(property="shop", type="text"),
    *               @OA\Property(property="email", type="text"),
    *               @OA\Property(property="phone", type="text"),
    *               @OA\Property(property="details", type="text"),
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
    public function edit($id, Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|string|min:3|max:120',
            'shop'=>'required|unique:vendors,shop_name,'.$id.'|string|min:3|max:120',
            'email'=>'required|email|string|min:5|max:120',
            'phone'=>'required|string|min:10|max:12',
            'details'=>'required|string|min:20',
            'profile'=>'sometimes|image|mimes:png,jpg,webp|max:700',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $vendor = Vendor::where('id', $id)->first();
        if ($request->file('profile')) {
            if ($vendor->profile) {
                Storage::delete($vendor->profile);
            }
            $fileimg = $request->file('profile');
            $profile = $request->file('profile')->move('products/gallery/', $vendor->name.$vendor->id.".".$fileimg->extension());
        } else{
            $profile = $vendor->profile;
        }
        $data = Vendor::where('id', $id)
            ->update([
            'name'=>$request->name,
            'slug'=>str()->slug($request->shop),
            'shop_name'=>$request->shop,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'details'=>$request->details,
            'profile'=>$profile,
        ]);

        if ($data) {
            return response()->json(['status' => true, 'data' => 'Shop have been updated successfully'], 200);
        }else {
            return response()->json(['status' => true, 'false' => 'Shop have not been updated','data'], 200);
        }
    }

    /**
     * @OA\Delete(
     *      path="/api/admin/deleteShop/{id}",
     *      operationId="deleteShop",
     *      tags={"product"},
     *      summary="Delete shop using Id",
     *      description="remove shop in database with size id",
     *      security={{"bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="enter shop id to be removed",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *       ),
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
    public function delete($shop)
    {
        $check = Vendor::where('id', $shop)->first();
        if ($check) {
            return response()->json(['status' => true, 'data' => 'Shop have been successfully deleted'], 200);
        }else {
            return response()->json(['status' => false, 'data' => 'Shop have not been deleted'], 200);
        }
    }
}
