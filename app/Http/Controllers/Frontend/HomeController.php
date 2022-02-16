<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $product_categories = ProductCategory::all();
        return view('frontend.pages.home', compact('product_categories'));
    }
}
