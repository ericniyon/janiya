<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductCategory;

class Towels extends Component
{
    public $towels = [];
    public function render()
    {
        $category = ProductCategory::where('category_name','TOWELS')->pluck('id');

        $this->towels = Product::where('product_category_id', $category)->get();
        return view('livewire.towels');
    }
}
