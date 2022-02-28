<?php

namespace App\Http\Livewire\Vendor;

use App\Models\Coupon;
use Carbon\Carbon;
use Livewire\Component;

class InsertCoupon extends Component
{
    public $coupon_name, $coupon_type, $coupon_value, $expiration_date;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'coupon_name'=>'required|string|unique:coupons,name',
            'coupon_type'=>'required|in:Fixed,Percentage',
            'coupon_value'=>'integer|required',
            'expiration_date'=>'nullable|date|after:'.Carbon::now()
        ]);
    }

    public function store()
    {
        $this->validate([
            'coupon_name'=>'required|string|unique:coupons,name',
            'coupon_type'=>'required|in:Fixed,Percentage',
            'coupon_value'=>'integer|required',
            'expiration_date'=>'nullable|date|after:'.Carbon::now()
        ]);
        Coupon::create([
            'name'=>$this->coupon_name,
            'coupon_code'=>str()->slug($this->coupon_name),
            'type'=>$this->coupon_type,
            'expire_at'=>$this->expiration_date,
            'value'=>$this->coupon_value,
        ]);
        $this->reset();
        return to_route('vendor.coupons');
    }
    public function render()
    {
        return view('livewire.vendor.insert-coupon');
    }
}
