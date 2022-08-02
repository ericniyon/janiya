<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;
use Validator;
use App\Models\Product;

class CartController extends Controller
{

    /**
     * @OA\Post(
     *      path="/api/addCart",
     *      operationId="addToCart",
     *      tags={"Cart"},
     *      summary="add to cart",
     *      description="add product to cart before check out",
     *      @OA\Parameter(
     *          name="color",
     *          description="color of product to add in cart",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *       ),
     *      @OA\Parameter(
     *          name="size",
     *          description="size of product to add in cart",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *       ),
     *      @OA\Parameter(
     *          name="quantity",
     *          description="Quantity of product to save in cart",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *       ),
     *      @OA\Parameter(
     *          name="product",
     *          description="id of product you are add to the cart",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *       ),
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
     *
     * )
     */

    function cartAdd(Request $request){
        $validator = Validator::make($request->all(),[
            'color'=>'string',
            'size'=>'string',
            'quantity'=>'integer|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $productfind = Product::where('id', $request->product)->get();
        $vendor = $request->has('vendor')?$request->vendor:NULL;
        if($productfind->count()>0){
            $product = Product::findOrFail($request->product);
            \Cart::add(array(
                'id'=>$product->id,
                'name'=>$product->name,
                'price'=>$product->price,
                'quantity' => $request->quantity,
                'attributes'=>array(
                    'color'=>$request->color,
                    'size'=>$request->size,
                    'shop'=>$vendor,
                ),
                'associatedModel' => $product,
            ));
            return response()->json(['status' => 'success', 'message' => 'successfull product added to cart'], 200);
        }else{
            return response()->json(['status' => 'success', 'message' => 'product not available'], 422);
        }

    }


    /**
     * @OA\Get(
     *      path="/api/viewCart",
     *      operationId="catContent",
     *      tags={"Cart"},
     *      summary="cart content",
     *      description="all contents in carts",
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
     *
     * )
     */

    function view(){
        if (\Cart::isEmpty()) {
            return response()->json(['status' => 'success', 'message' => 'your cart is empty !!'], 422);
        }
        return \Cart::getContent();
    }

    /**
     * @OA\Put(
     *      path="/api/updateCart",
     *      operationId="updatecart",
     *      tags={"Cart"},
     *      summary="update cart",
     *      description="update row of cart",
     *      @OA\Parameter(
     *          name="id",
     *          description="Id of row to be updated",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *       ),
     *      @OA\Parameter(
     *          name="quantity",
     *          description="New quantity of product to be updated",
     *          required=true,
     *          in="query",
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
     *
     * )
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'id'=>'string',
            'quantity'=>'integer|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        \Cart::update($request->id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity,
            ),
            ));
        return response()->json(['status'=>'success', 'message'=>'Cart updated successfully'], 200);
    }

    /**
     * @OA\Delete(
     *      path="/api/deleteItemCart/{id}",
     *      operationId="deletecart",
     *      tags={"Cart"},
     *      summary="delete product in cart",
     *      description="remove product in cart using row id",
     *      @OA\Parameter(
     *          name="id",
     *          description="Id of row to be removed",
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
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     *
     * )
     */
    public function remove($id)
    {
        \Cart::remove($id);
        return response()->json(['status' => 'success', 'message' => 'product successful removed'], 200);
    }

    /**
     * @OA\Delete(
     *      path="/api/clearCart",
     *      operationId="clearCart",
     *      tags={"Cart"},
     *      summary="clear cart",
     *      description="remove all product in cart",
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
     *
     * )
     */
    public function removeAll()
    {
        \Cart::clear();
        return response()->json(['status' => 'success', 'message' => 'cart successful cleared'], 200);
    }

    /**
     * @OA\Get(
     *      path="/api/totalCart",
     *      operationId="tatalCart",
     *      tags={"Cart"},
     *      summary="tatal cart",
     *      description="get summation of cart(grand total)",
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
     *
     * )
     */
    public function total()
    {
        $total = \Cart::getTotal();
        return response()->json(['status' => 'success', 'Total' => $total], 200);
    }

    /**
     * @OA\Get(
     *      path="/api/itemPriceCart/{id}",
     *      operationId="singlePrice",
     *      tags={"Cart"},
     *      summary="single product price in cart",
     *      description="update row of cart",
     *      @OA\Parameter(
     *          name="id",
     *          description="Id of row to be updated",
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
     *
     * )
     */
    public function singlePrice($id)
    {
        $items = \Cart::get($id);
        return $items->getPriceSum();
    }
}
