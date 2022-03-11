<?php

namespace App\Http\Livewire\Vendor;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Coupon;

class Coupons extends Component
{
    use WithPagination;
    public function render()
    {
        $coupons = Coupon::orderBy('name')->paginate(10);
        return view('livewire.vendor.coupons', compact('coupons'));
    }
}
