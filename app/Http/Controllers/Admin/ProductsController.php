<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function show(Product $product)
    {
        $categories = ProductCategory::select('category_name','id')->orderBy('category_name')->get();
        return view('backend.admin.view-single-product', compact('product','categories'));
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




    public function updateProduct(Request $request,Product $product)
    {
        $this->validate($request,[
            'name'=>'required|string|unique:products,name,'.$product->id,
            'price'=>'required|integer|min:500|max:500000',
            'details'=>'string|required|min:10|max:5000',
            'image'=>'image|mimes:png,jpg,webp|sometimes',
        ]);

        $product->update([
            'name'=>$request->name,
            'slug'=>str()->slug($request->name),
            'price'=>$request->price,
            'description'=>$request->details,
        ]);

        if($request->hasFile('image')) {
            if($product->images()->exists()){
                Storage::delete($product->images->image);
                $product->images->delete();
            }
            $photo = $request->file('image')->store('public/products/gallery');
            $product->images()->create([
                'product_id'=>$product->id,
                'image' => $photo,
            ]);
        }

        return to_route('admin.products.single',$product->slug)->with('success',$product->name.' Updated Successfully!');
    }
}
