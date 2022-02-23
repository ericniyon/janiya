<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductValiations;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    public function product_details(Vendor $vendor,Product $product)
    {
        return view('frontend.pages.product_details', compact('vendor','product'));
    }
    // this function will return product by it id
    public function shop()
    {
        return view('frontend.pages.shop');
    }

    public function becomeAffiliate()
    {
        $user = User::findOrFail(Auth::id());
        $user->update([
            'affiliate_link'=>str()->lower($this->getName($user))
        ]);
        return back()->with('success','Welcome to '.config('app.name').' family! please read our terms and 
        condition regarding to affiliate and partnership');
    }

    public function getName($user) {
        $characters = Hash::make($user->email);
        $randomString = '';
        for ($i = 0; $i < 10; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        return $randomString;
    }
}
