<?php

namespace App\Http\Livewire\Vendor;

use App\Models\Store;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Shop extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10, $searchkey = '';
    public function render()
    {
        $items = Store::with('product','owner')
                        ->where('user_id',Auth::user()->id)
                        ->orderByDesc('created_at')
                        ->paginate($this->perPage);
        return view('livewire.vendor.shop', compact('items'));
    }
}
