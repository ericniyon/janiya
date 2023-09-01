<?php

namespace App\Http\Livewire\Front;

use App\Http\Traits\AddToCartTrait;
use Livewire\Component;

class AsideCartSummary extends Component
{
    use AddToCartTrait; 

    public function removeItem($proId)
    {
        $this->removeFromCart($proId);
        $this->emitTo('front.top-cart','refreshComponent');
        $this->emit('alert',['type'=>'success','message'=>'Product removed from cart successfully']);
    }

    public function increase($proId)
    {
        // dd($proId);
        $this->increaseQuantity($proId);
        $this->emitTo('front.top-cart','refreshComponent');
        $this->emit('alert',['type'=>'success','message'=>'Cart quantity updated successfully']);
    }

    public function decrease($proId)
    {
        $this->decreaseQuantity($proId);
        $this->emitTo('front.top-cart','refreshComponent');
        $this->emit('alert',['type'=>'success','message'=>'Cart quantity updated successfully']);
    }

    public function render()
    {
        return view('livewire.front.aside-cart-summary');
    }
}
