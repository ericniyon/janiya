<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;
    public $paginationTheme = 'bootstrap';
    public $perPage = 20;

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        if ($product->images()->exists()) {
            $images = ProductImage::where('product_id',$product->id)->get();
            foreach($images as $img){
                Storage::delete($img->image);
                $img->delete();
            }
        }

        if ($product->colors()->exists()){
            foreach($product->colors as $color){
                Storage::delete($color->pivot->image);
            }
            $product->colors()->detach();
        }

        if ($product->sizes()->exists()){
            $product->sizes()->detach();
        }
        $product->delete();
    }
    public function render()
    {
        $products = Product::with('sizes','colors')->withCount('colors','sizes','images')
                            ->orderByDesc('created_at')->paginate($this->perPage);
        return view('livewire.admin.products', compact('products'));
    }
}
