<?php

namespace App\Http\Livewire\Front;

use App\Http\Traits\AddToCartTrait;
use App\Models\Coupon;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class Cart extends Component
{
    use AddToCartTrait;
    public $code,$promo_code;

    public function removeItem($proId)
    {
        $this->removeFromCart($proId);
        $this->emit('alert',['type'=>'success','message'=>'Product removed from cart successfully']);
    }

    public function increase($proId)
    {
        $this->increaseQuantity($proId);
        $this->emit('alert',['type'=>'success','message'=>'Cart quantity updated successfully']);
    }

    public function decrease($proId)
    {
        $this->decreaseQuantity($proId);
        $this->emit('alert',['type'=>'success','message'=>'Cart quantity updated successfully']);
    }

    public function applyCoupon()
    {
        $this->validate([
            'code'=>'required|string|min:3|max:120'
        ]);
        addCoupon($this->code);
        $this->reset();
        return redirect('cart');
        session()->flash('success','Coupon Applied Successfully!');
    }

    public function deleteCoupon()
    {
        removeCoupon();
        return redirect('cart');
        session()->flash('success','Coupon Cleared Successfully!');
    }

    public function addPromoCode()
    {
        $this->validate([
            'promo_code'=>'required|string|min:3|max:120'
        ]);
        applyPromoCode($this->promo_code);
        $this->reset();
        return redirect('cart');
    }
    
    public function removePromoCode()
    {
        removePromoCode();
        session()->flash('success1','Promo Code Removed Successfully');
        return redirect('cart');
    }

    public function render()
    {
        return view('livewire.front.cart');
    }
}
