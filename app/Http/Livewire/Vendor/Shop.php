<?php

namespace App\Http\Livewire\Vendor;

use App\Models\Store;
use Livewire\Component;
use App\Models\ProductAttribute;

use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Shop extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10, $searchkey = '';
    public function render()
    {
        // $this->colors = ProductAttribute::where('product_id',$this->product->id)
        // ->select(DB::raw('DISTINCT(color)'))->get();
        // $this->sizes = ProductAttribute::where('product_id',$this->product->id)
        // ->select(DB::raw('DISTINCT(size)'))->get();

        $items = Store::with('product')
                        ->where('vendor_id',Auth::guard('vendor')->user()->id)
                        ->orderByDesc('created_at')
                        ->paginate($this->perPage);
        return view('livewire.vendor.shop', compact('items'));
    }
}
