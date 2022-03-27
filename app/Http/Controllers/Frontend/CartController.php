<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Traits\AddToCartTrait;
use App\Models\Product;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;

class CartController extends Controller
{
    use AddToCartTrait;
     /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        if (\Cart::isEmpty()) {
            return to_route('shop')->with('warning','Your cart is empty! shop something into it!!');
        }
        return view('frontend.pages.cart');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart(Request $request,$product)
    {
        // dd($product);
        $this->validate($request,[
            'color'=>'string',
            'size'=>'string',
            'quantity'=>'integer|min:1',
        ]);
        $product = Product::findOrFail($product);
        // dd($product->id);
        $vendor = $request->has('vendor')?$request->vendor:NULL;
        $this->addToCartTrait($product,$request->color,$request->size,$request->quantity,$vendor);

        return to_route('cart');
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function cartContents(Request $request)
    {
        return $request->all();
    }
}
