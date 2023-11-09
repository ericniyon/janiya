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

        $category = ProductCategory::where('category_name','BEDSHEET')->first('id');

        $this->bedsheets = Product::where('product_category_id', $category->id)->get();
        
        return view('livewire.bedsheet', ['category' => $category]);
    }
}
