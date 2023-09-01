<?php

namespace App\Http\Livewire\Front;

use App\Http\Traits\AddToCartTrait;
use App\Models\Product;
use Livewire\Component;

class AllProducts extends Component
{
    use AddToCartTrait;

    public function addToCart($productId)
    {
        $product = Product::findOrFail($productId);
        $this->addToCartTrait($product, 1, $product->shop);
        $this->emitTo('front.top-cart','refreshComponent');
        $this->reset();
        $this->emit('alert', ['type' => 'success', 'message' => 'Product added to cart successfully']);
    }

    public function render()
    {
        $products = Product::whereHas('shop')->latest()->simplePaginate(12);
        return view('livewire.front.all-products', compact('products'));
    }
}
