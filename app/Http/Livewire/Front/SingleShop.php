<?php

namespace App\Http\Livewire\Front;

use App\Models\Store;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Traits\AddToCartTrait;

class SingleShop extends Component
{
    use WithPagination, AddToCartTrait;
    public $paginationTheme = 'bootstrap';
    public $perPage = 25, $searchKey = '', $sortBy = 'product_name', $sortKey = 'ASC';
    public $queryString = [
        'perPage'=>['except'=>25],
        'searchKey'=>['except'=>''],
        'sortBy'=>['except'=>'product_name'],
        'sortKey'=>['except'=>'ASC'],
    ];

    public $colsNumber = 3;

        protected $listeners = [
        'load-more' => 'loadMore'
    ];

    public function loadMore()
    {
        $this->perPage = $this->perPage + 3;
    }

    public $vendor;

    public function addToCart($productId)
    {
        $product = Product::findOrFail($productId);
        $this->addToCartTrait($product, 1, $product->shop);
        $this->emitTo('front.top-cart','refreshComponent');
        $this->emit('alert', ['type' => 'success', 'message' => 'Product added to cart successfully']);
    }

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


    public function filterThree()
    {
        $this->colsNumber = 3;
    }

    public function filterTwo()
    {
        $this->colsNumber = 2;
    }
    public function filterOne()
    {
        $this->colsNumber = 1;
    }




}
