<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ProductSize;
use App\Models\Color;
use Illuminate\Http\Request;
use Validator;

class ProAttController extends Controller
{
    /**
     * Create a new ApiAuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:adminApi', ['except' => ['showSize', 'showColor']]);
    }

    /**
     * @OA\Get(
     *      path="/api/size",
     *      operationId="getSize",
     *      tags={"product"},
     *      summary="get size list",
     *      description="select all size stored in database",
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
    public function showSize()
    {
        $sizes = ProductSize::orderBy('size')->get();
        if ($sizes) {
            return response()->json(['status' => true,'data' => $sizes], 200);
        }else {
            return response()->json(['status' => false,'data' => 'No Data To Display'], 200);
        }
    }

    /**
     * @OA\Post(
     *      path="/api/addSize",
     *      operationId="registerSize",
     *      tags={"product"},
     *      summary="Register new size",
     *      description="Register new record and return inserted data",
     *      security={{"bearer_token":{}}},
     *      @OA\Parameter(
     *          name="size",
     *          description="enter size name",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
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
    public function save_size(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'size'=>'required|string|min:1|max:5|unique:product_sizes,size',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $size = new ProductSize();
        $size->size = $request->size;

        $size->save();
        return response()->json(['status' => true, 'data' => 'Size have been generated successfully','data' => $size], 200);
    }

    /**
     * @OA\Delete(
     *      path="/api/deleteSize/{id}",
     *      operationId="deleteSize",
     *      tags={"product"},
     *      summary="Delete size using Id",
     *      description="remove size in database with size id",
     *      security={{"bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="enter size id to be removed",
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
    public function delete_size($size)
    {
        $results = ProductSize::where('id', $size)
                    ->delete();
        if ($results) {
            return response()->json(['status' => true, 'data' => 'Product Size Deleted Successfully!'], 200);
        }else {
            return response()->json(['status' => false, 'data' => 'Product Size Deleted Failed!'], 200);
        }
    }

    /**
     * @OA\Get(
     *      path="/api/colors",
     *      operationId="getColor",
     *      tags={"product"},
     *      summary="get colors list",
     *      description="select all color stored in database",
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
    public function showColor()
    {
        $colors = Color::all();
        if ($colors) {
            return response()->json(['status' => true,'data' => $colors], 200);
        }else {
            return response()->json(['status' => false,'data' => 'No Data To Display'], 200);
        }
    }

    /**
     * @OA\Post(
     *      path="/api/addColor",
     *      operationId="registerColor",
     *      tags={"product"},
     *      summary="Register new color",
     *      description="Register new record and return inserted data",
     *      security={{"bearer_token":{}}},
     *      @OA\Parameter(
     *          name="name",
     *          description="enter color name",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *       ),
     *      @OA\Parameter(
     *          name="code",
     *          description="enter color code ",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
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
    public function save_color(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|string|min:3|unique:colors,color_name',
            'code'=>'required|string|min:4|max:9|unique:colors,color_code',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $color = new Color();
        $color->color_name = $request->name;
        $color->color_code = $request->code;

        $color->save();
        return response()->json(['status' => true, 'data' => 'Color have been generated successfully','data' => $color], 200);
    }

    /**
     * @OA\Delete(
     *      path="/api/deleteColor/{id}",
     *      operationId="deleteColor",
     *      tags={"product"},
     *      summary="Delete color using Id",
     *      description="remove color in database with size id",
     *      security={{"bearer_token":{}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="enter color id to be removed",
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
    public function delete_color($color)
    {
        $results = Color::where('id', $color)
                    ->delete();
        if ($results) {
            return response()->json(['status' => true, 'data' => 'Color Deleted Successfully!'], 200);
        }else {
            return response()->json(['status' => false, 'data' => 'Color Deleted Failed!'], 200);
        }
    }
}
