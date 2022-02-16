<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function product_category()
    {
        $categories = ProductCategory::all();
        return view('backend.pages.product_category', compact('categories'));
    }



public function save_category(Request $request)
{
    if($request->category_image->getClientOriginalName())
    {
        $extension = $request->category_image->getClientOriginalExtension();
        $file = date('YmdHis').rand(1,99999).'.'.$extension;

        $request->category_image->storeAs('public/storage/category-img', $file);
    }

    else{
        $file = '';
    }

    $product_category = new ProductCategory();
    $product_category->category_name = $request->category_name;
    $product_category->category_image = $file;

    $product_category->save();

    return redirect()->back()->with('message', 'Product category have been created !');


}
}
