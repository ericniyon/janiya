<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function show(Product $product)
    {
        return view('backend.admin.view-single-product', compact('product'));
    }

    public function updateSize(Request $request,Product $product,$size)
    {
        $this->validate($request,[
            'quantity'=>'required|integer',
        ]);
        $product->sizes()->updateExistingPivot($size,['quantity'=>$request->quantity]);
        return back()->with('success','Quantity updated Successfully!');
    }

    public function updateColor(Request $request,Product $product,$color)
    {
        $this->validate($request,[
            'quantity'=>'required|integer',
            // 'image'=>'image|sometimes|mimes:png,jpg,webp|max:800',
        ]);
        // if($request->hasFile('image')){
        //     if ($product->colors->pivot->image) {
        //         Storage::disk('public')->delete($product->colors->pivot->image);
        //     }
        //     $image = $request->image->store('public/products/gallery/color');
        // } else{
        //     $image = $product->colors->pivot->image;
        // }
        $color = Color::findOrFail($color);
        $product->colors()->updateExistingPivot($color,['quantity'=>$request->quantity]);
        return back()->with('success',$color->color_name.' Quantity Updated Successfully!');
    }

    public function updateProduct(Request $request,Product $product)
    {
        // $product = Product::findOrFail($product);
        $this->validate($request,[
            'name'=>'required|string|unique:products,name,'.$product->id,
            'price'=>'required|integer|min:500|max:500000',
            'details'=>'string|required|min:10|max:5000',
            'image.*'=>'image|mimes:png,jpg,webp|sometimes',
        ]);

        $product->update([
            'name'=>$request->name, 
            'slug'=>str()->slug($request->name), 
            'price'=>$request->price, 
            'description'=>$request->details,
        ]);

        if($request->hasFile('images')) {
            $images = ProductImage::where('product_id',$product->id)->get();
            foreach($images as $img){
                Storage::delete($img->image);
                $img->delete();
            }
            foreach ($request->images as $image) {
                $photo = $image->store('public/products/gallery');
                $product->images()->create([
                    // 'product_id'=>$product->id,
                    'image' => $photo,
                ]);
            }
        }

        return to_route('admin.products.single',$product)->with('success',$product->name.' Updated Successfully!');
    }
}
