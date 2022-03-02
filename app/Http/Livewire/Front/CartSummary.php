<?php

namespace App\Http\Livewire\Front;

use App\Http\Traits\AddToCartTrait;
use Darryldecode\Cart\Facades\CartFacade;
use Livewire\Component;

class CartSummary extends Component
{
    use AddToCartTrait;
    public function removeItem($proId)
    {
        $this->removeFromCart($proId);
        $this->emit('alert',['type'=>'success','message'=>'Product removed from cart successfully']);
        return to_route('shop');
    }
    public function render()
    {
        return view('livewire.front.cart-summary');
    }
}
