<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ProductCategory;

use App\Models\Product;


class Categories extends Component
{

    public $categoryId = 1;

    protected $listerner = ['categorySelected'];


    public function categorySelected($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    public function render()
    {


        $categories = ProductCategory::all();
        return view('livewire.categories', ['categories' => ProductCategory::all(), "products" => Product::where('product_category_id',$this->categoryId)->get()]);
    }
}
