<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductValiations;
class StoresController extends Controller
{
    public function index()
    {
        return view('backend.vendors.shop-product');
    }
}
