<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Models\ProductSize;
use Illuminate\Support\Facades\Storage;
use Validator;

class CategoryController extends Controller
{
    public function show()
    {
        $categories = ProductCategory::all();
        return response()->json(['status' => true,'data' => $categories], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'category_name'=>'string|required|unique:product_categories,category_name|min:3|max:220',
            'category_image'=>'image|required|mimes:png,jpg,webp|required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

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

        return response()->json(['status' => true, 'message' => 'Product category have been created !','data' => $product_category], 200);
    }
}
