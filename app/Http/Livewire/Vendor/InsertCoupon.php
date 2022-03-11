<?php

namespace App\Http\Livewire\Vendor;

use Livewire\Component;
use App\Models\Coupon;
use Carbon\Carbon;

class InsertCoupon extends Component
{
    public $name, $value,$coupon_type,$expire_at;
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'required|string|unique:coupons,name',
            'value'=>'required|integer',
            'coupon_type'=>'required|string|in:Fixed,Percentage',
            'expire_at'=>'date|after_or_equal:'.Carbon::now(),
        ]);
    }

    public function store()
    {
        $this->validate([
            'name'=>'required|string|unique:coupons,name',
            'value'=>'required|integer',
            'coupon_type'=>'required|string|in:Fixed,Percentage',
            'expire_at'=>'date|after_or_equal:'.Carbon::now(),
        ]);
        Coupon::create([
            'name'=>$this->name,
            'expire_at'=>$this->expire_at,
            'value'=>$this->value,
            'coupon_code'=>str()->slug($this->name),
            'type'=>$this->coupon_type
        ]);

        $this->reset();
        return to_route('vendor.coupons');
    }
    public function render()
    {
        return view('livewire.vendor.insert-coupon');
    }
}
