<?php

namespace App\Http\Livewire\Front;

use App\Models\ProductCategory;
use App\Models\Store;
use App\Models\Vendor;
use Livewire\Component;
use Livewire\WithPagination;

class Shop extends Component
{
    use WithPagination;
    public $paginationTheme = 'bootstrap';
    public $perPage = 25, $search = '';
    public $categories, $products, $shops;
    public $shop_name, $category = [];
    public $queryString = [
        'search'=>['except'=>''],
        'perPage'=>['except'=>25],
    ];

    public function mount()
    {
        $this->products = Store::with('product','owner','valiations')->get();
        $this->shops = Vendor::select('shop_name','id')->inRandomOrder()->orderBy('shop_name')->limit(5)->get();
        $this->categories = ProductCategory::select('id','category_name')->get();
    }

    public function updatedShop($shop)
    {
        $this->products = Store::where('vendor_id',$shop)->with('product','owner','valiations')->get();
    }

    public function render()
    {
        return view('livewire.front.shop');
    }
}
