<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductValiations;
use App\Models\Vendor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $product_categories = ProductCategory::all();
        $products = ProductValiations::with('product','color','size')->get();
        $shops = Vendor::where('confirmed',1)->where('active',1)->get();

        return view('frontend.pages.home', compact('product_categories', 'products','shops'));
    }
    // this function will return product by it id
    public function product_details($id)
    {
        $product = Product::find($id);
        return view('frontend.pages.product_details', compact('product'));
    }
    // this function will return product by it id
    public function shop()
    {

        return view('frontend.pages.shop');
    }
}
