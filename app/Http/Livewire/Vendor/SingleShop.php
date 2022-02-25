<?php

namespace App\Http\Livewire\Vendor;

use App\Models\ProductCategory;
use App\Models\ProductValiations;
use App\Models\Store;
use App\Models\StoreValiation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SingleShop extends Component
{
    public $product, $name, $colorsLoop, $sizesLoop, $categories; 

    public function mount($product)
    {
        $this->sizesLoop = [[]];
        $this->product = $product;
        $this->categories = ProductCategory::select('id','category_name')->get();
    }

    public function addNewSizeRow()
    {
        $this->sizesLoop[] = [];
    }

    public function removeSizeRow($index)
    {
        unset($this->sizesLoop[$index]);
        $this->sizesLoop = array_values($this->sizesLoop);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'string|unique:stores,name|min:3|max:220',
            'sizesLoop.*.size'=>'required|integer',
            'sizesLoop.*.color'=>'required|integer',
            'sizesLoop.*.quantity'=>'required|integer|min:5',
        ]);
    }

    public function store()
    {
        $this->validate([
            'name'=>'string|unique:stores,name|min:3|max:220',
            'sizesLoop.*.size'=>'required|integer',
            'sizesLoop.*.color'=>'required|integer',
            'sizesLoop.*.quantity'=>'required|integer|min:5',
        ]);
        $product = Store::create([
            'name'=>$this->name,
            'slug'=>str()->slug($this->name),
            'vendor_id'=>Auth::guard('vendor')->id(),
            'product_id'=>$this->product->id,
        ]);
        foreach($this->sizesLoop as $key=>$item){
            StoreValiation::create([
                'store_id'=>$product->id,
                'color_id'=>$item['color'],
                'product_size_id'=>$item['size'],
                'quantity'=>$item['quantity'],
            ]);
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
