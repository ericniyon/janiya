<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductValiations;
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
}
