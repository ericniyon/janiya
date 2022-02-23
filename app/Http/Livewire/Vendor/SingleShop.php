<?php

namespace App\Http\Livewire\Vendor;

use App\Models\ProductValiations;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SingleShop extends Component
{
    public $items, $product, $attributes;

    public function mount($product)
    {
        $this->items = [[]];
        $this->attributes = ProductValiations::all();
        $this->product = $product;
    }

    public function addNewRow()
    {
        $this->items[] = [];
    }

    public function removeRow($index)
    {
        unset($this->items[$index]);
        $this->items = array_values($this->items);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'items.*.product'=>'required|integer',
            'items.*.quantity'=>'required|integer',
        ]);
    }

    public function store()
    {
        $this->validate([
            'items.*.product'=>'required|integer',
            'items.*.quantity'=>'required|integer',
        ]);
        
        $store = Store::create([
            'vendor_id'=>Auth::guard('vendor')->id(), 
            'product_id'=>$this->product->id,
        ]);
        foreach($this->items as $key=>$item){
            $store->valiations()->attach($item['product'],['quantity'=>$item['quantity']]);
            $prod = ProductValiations::findOrFail($item['product']);
            $new_quantity = $prod->quantity - $item['quantity'];
            $prod->update(['quantity'=>$new_quantity]);
        }

        session()->flash('success',$this->product->name.' Added into store successfully!');
        $this->reset();
        return to_route('vendor.store');
    }
    public function render()
    {
        return view('livewire.vendor.single-shop');
    }
}
