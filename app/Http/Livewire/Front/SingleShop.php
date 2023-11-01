<?php

namespace App\Http\Livewire\Front;

use App\Models\Store;
use Livewire\Component;
use Livewire\WithPagination;

class SingleShop extends Component
{
    use WithPagination;
    public $paginationTheme = 'bootstrap';
    public $perPage = 25, $searchKey = '', $sortBy = 'id', $sortKey = 'ASC';
    public $queryString = [
        'perPage'=>['except'=>25],
        'searchKey'=>['except'=>''],
        'sortKey'=>['except'=>'ASC'],
    ];

    public $vendor;
    public function mount($vendor)
    {
        $this->vendor = $vendor;
    }
    public function render()
    {
        $products = Store::where('vendor_id',$this->vendor->id)
        ->orderBy($this->sortBy,$this->sortKey)
        ->paginate($this->perPage);
        return view('livewire.front.single-shop', compact('products'));
    }
}
