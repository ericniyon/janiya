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

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $categories = Product::select('name','id')->orderBy('name')->get();
        return response()->json(['status' => true,'data' => $categories], 200);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'string|unique:products,name|min:3|max:220',
            'price'=>'required|integer|min:500|max:500000',
            'factory_price'=>'required|integer|min:500|max:500000',
            'product_category_id'=>'required|integer',
            'description'=>'string|required|min:10|max:5000',
            'product_image'=>'image|required|mimes:png,jpg,webp|required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $product = Product::create([
            'name'=>$request->name,
            'slug'=>str()->slug($request->name,),
            'price'=>$request->price,
            'factory_price'=>$request->factory_price,
            'description'=>$request->description,
            'product_image'=>'null',
            'product_category_id'=>$request->product_category_id
        ]);

        if ($request->file('product_image')) {
            $fileimg = $request->file('product_image');
            $path = $request->file('product_image')->move('products/gallery/', $product->name.$product->id.".".$fileimg->extension());

            ProductImage::create([
                'image' => $path,
                'product_id'=>$product->id
            ]);;

            return response()->json(["Blog"=>[
                "message" => "Product successfull created",
                "Data" => $product
            ]],201);
        }

        return response()->json(['status' => true,'message' => 'susseccfull Created'], 200);
    }

    public function deleteProduc($product)
    {
        $check = Product::where('id', $product)
                    ->get();
        if ($check->count()) {
            $results = Product::where('id', $product)
                        ->delete();
            return response()->json(['status' => true,'message' => 'susseccfull Deleted'], 200);
        }else{
            return response()->json(['status' => false,'message' => 'not deleted'], 200);
        }
    }


    public function updateProduct($product, Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|string|unique:products,name,'.$product,
            'price'=>'required|integer|min:500|max:500000',
            'details'=>'string|required|min:10|max:5000',
            'image'=>'image|mimes:png,jpg,webp|sometimes',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $check = Product::where('id', $product)->count();
        if (!$check>0) {
            return response()->json(['status' => false,'message' => 'Product not exist !'], 200);
        }

        $results = Product::where('id', $product)
            ->update([
            'name'=>$request->name,
            'slug'=>str()->slug($request->name),
            'price'=>$request->price,
            'description'=>$request->details,
        ]);

        if($request->file('image')) {
            if(Product::where('id', $product)->product_image->exists()){
                Storage::delete(Product::where('id', $product)->images->image);
                Product::where('id', $product)->delete();
            }
            $fileimg = $request->file('image');
            $path = $request->file('image')->move('products/gallery/', $product->name.$product->id.".".$fileimg->extension());
            $product->images()->create([
                'product_id'=>$product->id,
                'image' => $photo,
            ]);
        }

            return response()->json(['status' => true,'message' => 'susseccfull updated'], 200);
    }

    public function updateAttribute(Request $request,ProductAttribute $attribute,)
    {
        $this->validate($request,[
            'quantity'=>'required|integer',
            'image'=>'sometimes|image|mimes:png,jpg,webp|max:750',
        ]);
        if ($request->hasFile('image')) {
            if ($attribute->image) {
                Storage::delete($attribute->image);
            }
            $color_image = $request->image->store('public/products/gallery/color');
        } else{
            $color_image = $attribute->image;
        }
        $attribute->update([
            'quantity'=>$request->quantity,
            'image'=>$color_image,
        ]);
        return back()->with('success','Quantity updated Successfully!');
    }

    public function newAttribute(Request $request, Product $product)
    {


        $this->validate($request,[
            'image'=>'sometimes|image|mimes:png,jpg,webp|max:750',
        ]);

        if ($request->hasFile('image')) {
            $color_image = $request->image->store('public/products/gallery/color');
        } else{
            $color_image=null;
        }

        $product->attributes()->create([
            'color_id'=>$request->color,
            'product_size_id'=>$request->size,
            'quantity'=>$request->quantity,
            'image'=>$color_image,
        ]);

        return back()->with('success','Product updated Successfully!');
    }

}
