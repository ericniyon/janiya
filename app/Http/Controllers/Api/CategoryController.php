<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Models\ProductSize;
use Illuminate\Support\Facades\Storage;
use Validator;

class CategoryController extends Controller
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
     *      path="/api/categories",
     *      operationId="getCategories",
     *      tags={"product"},
     *      summary="get categories list",
     *      description="select all categories stored in database",
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
        $categories = ProductCategory::all();
        return response()->json(['status' => true,'data' => $categories], 200);
    }

    /**
     * @OA\Post(
     *      path="/api/addCategory",
     *      operationId="registerCategory",
     *      tags={"product"},
     *      summary="Register new category",
     *      description="Register new record and return inserted data",
     *      security={{"bearer_token":{}}},
     *
    *     @OA\RequestBody(
    *         @OA\JsonContent(),
    *         @OA\MediaType(
    *            mediaType="multipart/form-data",
    *            @OA\Schema(
    *               type="object",
    *               required={"category_name","category_image"},
    *               @OA\Property(property="category_name", type="text"),
    *               @OA\Property(property="category_image", type="file"),
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
            'category_name'=>'string|required|unique:product_categories,category_name|min:3|max:220',
            'category_image'=>'image|required|mimes:png,jpg,webp|required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        if($request->category_image->getClientOriginalName())
        {
            $extension = $request->category_image->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,99999).'.'.$extension;

            $request->category_image->storeAs('public/storage/category-img', $file);
        }

        else{
            $file = '';
        }

        $product_category = new ProductCategory();
        $product_category->category_name = $request->category_name;
        $product_category->category_image = $file;

        $product_category->save();

        return response()->json(['status' => true, 'message' => 'Product category have been created !','data' => $product_category], 200);
    }
}
