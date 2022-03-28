<?php

namespace App\Http\Livewire\Front;

use App\Http\Traits\AddToCartTrait;
use App\Models\Color;
use App\Models\ProductAttribute;
use App\Models\ProductSize;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AddToCart extends Component
{
    use AddToCartTrait;
    public $product, $sizes, $colors;
    public $quantity = 1, $color, $size;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function increase()
    {
        $this->quantity = $this->quantity + 1;
    }

    public function descrease()
    {
        if ($this->quantity>1) {
            $this->quantity = $this->quantity - 1;
        }
    }

    public function mount($product)
    {
        $this->colors = ProductAttribute::where('product_id',$this->product->id)
        ->select(DB::raw('DISTINCT(color)'))->get();
        $this->sizes = ProductAttribute::where('product_id',$this->product->id)
        ->select(DB::raw('DISTINCT(size)'))->get();
        $this->product = $product;
    }
    public function render()
    {
        return view('livewire.front.add-to-cart');
    }
}
