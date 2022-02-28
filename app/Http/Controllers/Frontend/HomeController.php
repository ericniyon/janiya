<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $product_categories = ProductCategory::all();
        // $products = Product::join('product_categories','product_categories.id','=','products.product_category_id')
                    // ->select('product_categories.*', 'products.*')
                    // ->get();

        return view('frontend.pages.home', compact('product_categories'));
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
