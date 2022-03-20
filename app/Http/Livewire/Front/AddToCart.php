<?php

namespace App\Http\Livewire\Front;

use App\Http\Traits\AddToCartTrait;
use App\Models\Color;
use App\Models\ProductAttribute;
use App\Models\ProductSize;
use Darryldecode\Cart\Cart;
use Livewire\Component;

class AddToCart extends Component
{
    use AddToCartTrait;
    public $product, $sizes, $colors;
    public $quantity = 1, $color, $size;

    // public function setColor($color)
    // {
    //     $this->color = $color;
    // }

    // public function setSize($size)
    // {
    //     $this->size = $size;
    // }

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

    // public function AddToCart($color,$size,$quantity)
    public function AddToCart($quantity)
    {
        // if (is_null($color)) {
        //     $this->emit('alert',['type'=>'error','message'=>'Select Color first']);
        //     return;
        // }
        // if (is_null($size)) {
        //     $this->emit('alert',['type'=>'error','message'=>'Choose Size that you want']);
        //     return;
        // }

        $this->addToCartTrait($this->product,$quantity);
        // $this->addToCartTrait($this->product,$color,$size,$quantity);

        return to_route('cart');
    }

    public function mount($product)
    {
        $this->product = $product;
        $this->colors = ProductAttribute::where('product_id',$this->product->id)->select('id','color')->distinct()->get();
        $this->sizes = ProductAttribute::where('product_id',$this->product->id)->select('id','size')->distinct()->get();
    }
    public function render()
    {
        return view('livewire.front.add-to-cart');
    }
}
