<?php

namespace App\Http\Livewire\Front;

use App\Models\District;
use App\Models\Vendor;
use Livewire\Component;
use Livewire\WithPagination;

class ShopByDistrict extends Component
{
    public $district = '';
    use WithPagination;
    public $paginationTheme = 'bootstrap';
    public function render()
    {
        $districts = District::orderBy('name')->get();
        $shops = Vendor::where('confirmed',1)->where('active',1)
                        ->when($this->district, function($que){
                            return $que->where('district_id',$this->district);
                        })
                        ->orderBy('shop_name')->simplePaginate(20);
        return view('livewire.front.shop-by-district',compact('districts','shops'));
    }
}
