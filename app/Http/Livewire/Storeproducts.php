<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Store;

use App\Models\ProductCategory;

class Storeproducts extends Component
{

    public $categoryId = 1;

     protected $listeners = ['selectedCategory'];


     public function selectedCategory($category_id)
    {

        $this->categoryId = $category_id;
    }


    public function render()
    {
        $shops = Store::all();
        $categories = ProductCategory::all();
        $products = Product::where('product_category_id', $this->categoryId)->get();
        return view('livewire.storeproducts', ['categories'=> $categories, 'products' => $products, 'shops' => $shops]);
    }

}
