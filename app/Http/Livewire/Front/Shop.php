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
    public $shops = [];
    public $perPage = 25, $search = '';

    public $queryString = ['filters'];

    public array $filterOptions = [
        'prices' => ['0,25', '25,50'],
    ];

    public array $filters = array();

    public array $arrayFilterToMerge = [
        'prices' => [],
    ];

    public $orderSelect ;

    public $orderBy = [
        'key' => 'created_at',
        'direction' => 'desc'
    ];


    public function render()
    {
        return view('livewire.front.shop', [
            'shops' => Store::all(),
            "products" => Store::whereIn('product_id',[0,2])
        ]);
    }

    public function mount()
    {
        $this->filters = array_marge($this->filterToMerge, $this->filters);
    }

    public function updated($name, $value)
    {
        $this->resetPage();
    }

    public function updatedFiltersPrice($value)
    {
        $this->filters['price'] = explode(',',$this->filters['price']);
    }
}


