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
        $products = Product::with('colors','sizes','thumb')
                    ->paginate($this->perPage);
        return view('livewire.vendor.store', compact('products'));
    }
}
