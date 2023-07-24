<?php

namespace App\Http\Livewire\Front;

use App\Models\Product;
use App\Models\Store;
use Livewire\Component;
use Livewire\WithPagination;

class SingleShop extends Component
{
    use WithPagination;
    public $paginationTheme = 'bootstrap';
    public $perPage = 25, $searchKey = '', $sortBy = 'product_name', $sortKey = 'ASC';
    public $queryString = [
        'perPage'=>['except'=>25],
        'searchKey'=>['except'=>''],
        'sortBy'=>['except'=>'product_name'],
        'sortKey'=>['except'=>'ASC'],
    ];

    public $vendor;
    public function mount($vendor)
    {
        $this->vendor = $vendor;
    }
    public function render()
    {
        $products = Product::whereRelation('shop','id',$this->vendor->id)->when($this->searchKey, function($query){
            return $query->where('product_name','like','%'.$this->searchKey.'%');
        })
        ->orderBy($this->sortBy,$this->sortKey)
        ->paginate($this->perPage);
        return view('livewire.front.single-shop', compact('products'));
    }
}
