<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use app\Models\ProductCategory as Categories;

class ProductCategory extends Component
{
        public $categories = [];


        public function mount()
    {
        $this->categories = Categories::all();
    }


    public function render()
    {
        return view('livewire.frontend.product-category');
    }
}
