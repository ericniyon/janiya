<?php

namespace App\Http\Livewire\Vendor;

use App\Models\Coupon;
use Livewire\Component;
use Livewire\WithPagination;

class Coupons extends Component
{
    use WithPagination;
    public $searchKey = '', $perPage = 10;

    public $queryString = [
        'searchKey'=>['except'=>''],
        'perPage'=>['except'=>10],
    ];

    public function delete($id)
    {
        $coupon = Coupon::findOrFail($id);
        $coupon->delete();
        $this->emit('alert',['type'=>'success','message'=>'Coupon Deleted Successfully']);
    }

    public function render()
    {
        $coupons = Coupon::where('name','like','%'.$this->searchKey.'%')
                            ->orderByDesc('created_at')
                            ->paginate($this->perPage);
        return view('livewire.vendor.coupons', compact('coupons'));
    }
}
