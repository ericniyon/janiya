<?php

namespace App\Http\Livewire\Front;

use App\Models\Coupon;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class CheckoutDiscounts extends Component
{
    public $code, $promo_code;
    public function applyCoupon()
    {
        $this->validate([
            'code'=>'required|string|min:3|max:120'
        ]);
        addCoupon($this->code);
        $this->reset();
        return redirect('checkout');
        session()->flash('success','Coupon Applied Successfully!');
    }

    public function deleteCoupon()
    {
        removeCoupon();
        return redirect('checkout');
        session()->flash('success','Coupon Cleared Successfully!');
    }

    public function addPromoCode()
    {
        $this->validate([
            'promo_code'=>'required|string|min:3|max:120'
        ]);
        applyPromoCode($this->promo_code);
        $this->reset();
        return redirect('checkout');
    }
    
    public function removePromoCode()
    {
        removePromoCode();
        session()->flash('success1','Promo Code Removed Successfully');
        return redirect('checkout');
    }
    public function render()
    {
        return view('livewire.front.checkout-discounts');
    }
}
