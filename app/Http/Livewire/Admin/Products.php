<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;
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
        if ($product->shops()->exists()) {
            $this->emit('alert',['type'=>'error','message'=>'This product belongs to some shops!!']);
            return;
        }
        if ($product->images()->exists()) {
            $images = ProductImage::where('product_id',$product->id)->get();
            foreach($images as $img){
                if($img->image){Storage::delete($img->image);}
                $img->delete();
            }
        }

        if ($product->attributes()->exists()) {
            foreach($product->attributes as $attr){
                if ($attr->image) { Storage::delete($attr->image); }
                $attr->delete();
            }
        }
        
        $product->delete();
    }
    public function render()
    {
        $products = Product::with('thumb','attributes')->withCount('images')
        ->orderByDesc('products.created_at')->paginate($this->perPage);
        return view('livewire.admin.products', compact('products'));
    }
}
