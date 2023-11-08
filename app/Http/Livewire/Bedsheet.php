<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductCategory;

class Bedsheet extends Component
{

    public $bedsheets= [];


    public function render()
    {

        $category = ProductCategory::where('category_name','BEDSHEET')->pluck('id');

        $this->beedsheets = Product::where('product_category_id', $category)->get();
        
        return view('livewire.bedsheet', ['category' => $category]);
    }
}
