<?php

namespace App\Http\Livewire\Front;

use App\Models\Store;
use Livewire\Component;
use Livewire\WithPagination;

class SingleShop extends Component
{
    use WithPagination;
    public $paginationTheme = 'bootstrap';
    public $perPage = 30, $searchKey = '', $sortBy = 'name', $sortKey = 'ASC';
    public $queryString = [
        'perPage'=>['except'=>30],
        'searchKey'=>['except'=>''],
        'sortBy'=>['except'=>'name'],
        'sortKey'=>['except'=>'ASC'],
    ];

    public $vendor;
    public function mount($vendor)
    {
        $this->vendor = $vendor;
    }
    public function render()
    {
        $products = Store::where('vendor_id',$this->vendor->id)->when($this->searchKey, function($query){
            return $query->where('name','like','%'.$this->searchKey.'%');
        })
        ->orderBy($this->sortBy,$this->sortKey)
        ->paginate($this->perPage);
        return view('livewire.front.single-shop', compact('products'));
    }
}
