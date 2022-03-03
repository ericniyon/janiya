<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductValiations;
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

    public function singleOrder($order)
    {
        $order = Order::findOrFail(Crypt::decryptString($order));
        $items = $order->items()->where('shop',Auth::guard('vendor')->id())->orderByDesc('created_at')->get();
        return view('backend.vendors.single-order', compact('items','order'));
    }
}
