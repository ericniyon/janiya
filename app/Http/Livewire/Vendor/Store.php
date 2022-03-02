<?php

namespace App\Http\Livewire\Vendor;

use App\Models\Product;
use App\Models\ProductValiations;
use App\Models\Store as ModelsStore;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
class Store extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $perPage = 10, $searchkey = '';
    public function render()
    {
        $products = Product::with('thumb','attributes')
                    ->when($this->searchkey, function($query){
                        $query->where('name','like','%'.$this->searchkey.'%')
                        ->orWhere('description','like','%'.$this->searchkey.'%');
                    })
                    ->paginate($this->perPage);
        return view('livewire.vendor.store', compact('products'));
    }
}
