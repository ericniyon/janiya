<?php

namespace App\Http\Livewire\Front;

use App\Http\Traits\AddToCartTrait;
use App\Models\Color;
use App\Models\ProductSize;
use Darryldecode\Cart\Cart;
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

    public function AddToCart($color,$size,$quantity)
    {
        if (is_null($color)) {
            $this->emit('alert',['type'=>'error','message'=>'Select Color first']);
            return;
        }
        if (is_null($size)) {
            $this->emit('alert',['type'=>'error','message'=>'Choose Size that you want']);
            return;
        }

        $this->addToCartTrait($this->product,$color,$size,$quantity);

        return to_route('shop');
    }

    public function mount($product)
    {
        // $colorIds = [];
        // $sizeIds = [];
        // foreach ($this->product->valiations()->pluck('color_id') as $value) {
        //     array_push($colorIds,$value);
        // }
        // foreach ($this->product->valiations()->pluck('product_size_id') as $value) {
        //     array_push($sizeIds,$value);
        // }
        // $this->colors = Color::whereIn('id',$colorIds)->select('id','color_code')->distinct()->get();
        // $this->sizes = ProductSize::whereIn('id',$sizeIds)->select('id','size')->distinct()->get();
        $this->product = $product;
    }
    public function render()
    {
        return view('livewire.front.add-to-cart');
    }
}
