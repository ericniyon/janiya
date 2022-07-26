<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductValiations;
use App\Models\StoreAttribute;
use App\Models\ProductAttribute;
use Validator;

class StoreController extends Controller
{
    /**
     * Create a new ApiAuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:vendorApi');
    }

    /**
     * @OA\get(
     * path="/api/vendor/single/{id}/product",
     * summary="check productby id",
     * description="filter product by by id",
     * operationId="vendorItem",
     *      security={{"bearer_token":{}}},
     * tags={"store"},
     *      @OA\Parameter(
     *          name="id",
     *          description="product id of the item to retrieve",
     *          required=true,
     *          in="path",
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
    public function singleProduct($product){
        $results = Product::where('id', $product)->get();
        if ($results->count()>0) {
            return response()->json(['status' => 'Success','data' => $results], 200);
        } else {
            return response()->json(['status' => 'Success','data' => 'no data to display'], 200);
        }
    }

    /**
     * @OA\Post(
     *      path="/api/admin/newAttribute",
     *      operationId="newAttProduct",
     *      tags={"store"},
     *      summary="Register new product",
     *      description="Register new record and return inserted data",
     *      security={{"bearer_token":{}}},
     *
    *     @OA\RequestBody(
    *         @OA\JsonContent(),
    *         @OA\MediaType(
    *            mediaType="multipart/form-data",
    *            @OA\Schema(
    *               type="object",
    *               required={"id","color", "size", "quantity"},
    *               @OA\Property(property="id", type="text"),
    *               @OA\Property(property="color", type="integer"),
    *               @OA\Property(property="size", type="integer"),
    *               @OA\Property(property="quantity", type="text"),
    *               @OA\Property(property="image", type="file"),
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

    public function newAttribute(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'id' => ['required'],
            'quantity' => ['required', 'string'],
            'size' => ['required'],
            'color' => ['required'],
            'image'=>'sometimes|image|mimes:png,jpg,webp|max:750',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        if ($request->file('image')) {
            $color_image = $request->image->store('public/products/gallery/color');
        } else{
            $color_image=null;
        }

        ProductAttribute::create([
            'color'=>$request->color,
            'size'=>$request->size,
            'quantity'=>$request->quantity,
            'image'=>$color_image,
            'product_id'=>$request->id,
        ]);

        return response()->json(['status' => 'success','data' => 'Product attribute created Successfully!'], 200);
    }
}
