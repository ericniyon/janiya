<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductValiations;
use App\Models\StoreAttribute;
use App\Models\ProductAttribute;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class StoresController extends Controller
{
    public function index()
    {
        return view('backend.vendors.shop-product');
    }

    public function shop(Product $product)
    {
        return view('backend.vendors.single-shop-item', compact('product'));
    }


    public function storeUpdates(Request $request)
    {

        $current_qty = StoreAttribute::findOrFail($request->id);
        $new_quantity = $current_qty->quantity + $request->quantity;

        DB::table('store_attributes')->update([
            'quantity' => $new_quantity,
            'size' => $request->size,
            'color' => $request->color,

        ]);
        $product_att_qty = ProductAttribute::find($request->product_attribute_id);


        DB::table('product_attributes')->update([
            'quantity' => $product_att_qty->quantity - $new_quantity

        ]);

        return redirect()->back()->with('message', "Thank you for updating");
    }


    public function singleOrder($order)
    {
        $order = Order::findOrFail(Crypt::decryptString($order));
        $items = $order->items()->where('shop',Auth::guard('vendor')->id())->orderByDesc('created_at')->get();
        return view('backend.vendors.single-order', compact('items','order'));
    }
}
