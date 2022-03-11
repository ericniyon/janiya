<?php

namespace App\Http\Livewire\Front;
use App\Models\Product;

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
    public $shop_name, $category, $category_name = [];
    public $queryString = [
        'search'=>['except'=>''],
        'perPage'=>['except'=>25],
        'filters'
    ];

    public array $filterOptions = [
        'category_name' => ['blue'],
    ];

    public array $filters = array();

    public array $arrayFilterToMerge = [
        'category_name' => [],
    ];

    public $orderSelect ;

    public $orderBy = [
        'key' => 'created_at',
        'direction' => 'desc'
    ];

    public function mount()
    {
        // $this->products = Store::all();

        // $this->products = Store::whereHas('valiations',function($query){
        //     $query->where('order_confirmed',1);
        // })
        // ->with('valiations')
        // ->get();

        $stocks = Store::all()->pluck('product_id');

        $this->products = Product::whereNotIn('id', $stocks)->inRandomOrder()->limit(12)->get();

        $this->shops = Vendor::select('shop_name','id')->inRandomOrder()->orderBy('shop_name')->limit(5)->get();
        $this->categories = ProductCategory::select('category_name','id')->inRandomOrder()->orderBy('category_name')->limit(5)->get();

        // $this->categories = ProductCategory::select('id','category_name')->get();
    }

    public function updatedShop($category_name)
    {
        $this->products = Product::where('product_category_id',$category_name)->get();
    }

    public function render()
    {
        return view('livewire.front.shop');
    }
}


