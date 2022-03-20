<?php

namespace App\Http\Livewire\Vendor;

use App\Models\ProductCategory;
use App\Models\ProductAttribute;
use App\Models\Store;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\StoreAttribute;
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

    public function addNewRow()
    {
        $this->sizesLoop[] = [];
    }

    public function removeRow($index)
    {
        unset($this->sizesLoop[$index]);
        $this->sizesLoop = array_values($this->sizesLoop);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            // 'name'=>'string|unique:stores,name|min:3|max:220',
            'sizesLoop.*.attribute'=>'required|integer',
            'sizesLoop.*.quantity'=>'required|integer|min:5',
        ]);
    }

    public function store()
    {

        $max_qty = 0;
        foreach($this->sizesLoop as $key=>$item){
                $attribute = ProductAttribute::findOrFail($item['attribute']);

                $min_qty = $attribute->quantity;
        }

        $this->validate([
            // 'name'=>'string|unique:stores,name|min:3|max:220',
            'sizesLoop.*.attribute'=>'required|integer',
            'sizesLoop.*.quantity'=>'required|integer|max:'.$max_qty,
        ]);


        if (Store::where('name', $this->product->name)->exists()) {
            # code...
            // foreach($this->sizesLoop as $key=>$item){
            //     $attribute = ProductAttribute::findOrFail($item['attribute']);

            //     $min_qty = $attribute->quantity;


            //     DB::table('store_attributes')->update(['quantity' => $item['quantity'] + $attribute->quantity]);
            //     // $attribute->update(['quantity'=>$attribute->quantity - $item['quantity']]);
            //     ProductAttribute::find($attribute->id)->update(['quantity'=>$attribute->quantity - $item['quantity']]);
            // }
            session()->flash('message',$this->product->name.' Product been Added into store successfully! please update in order to continue');

            return to_route('vendor.shop');

        } else {
            # code...
            $store = Store::create([
                'name'=>$this->product->name,
                'slug'=>str()->slug($this->product->name),
                'vendor_id'=>Auth::guard('vendor')->id(),
                'product_id'=>$this->product->id,
            ]);


            foreach($this->sizesLoop as $key=>$item){
                $attribute = ProductAttribute::findOrFail($item['attribute']);

                $min_qty = $attribute->quantity;

                $stored_item = $store->valiations()->create([
                    'product_attribute_id'=>$attribute->id,
                    'quantity'=>$item['quantity'],
                    'size' => $attribute->size,
                    'color' => $attribute->color
                ]);

                // $attribute->update(['quantity'=>$attribute->quantity - $item['quantity']]);
                ProductAttribute::find($attribute->id)->update(['quantity'=>$attribute->quantity - $item['quantity']]);

            }

            $store->orders()->create([
                'total_amount'=>$store->product->price * $store->valiations()->sum('quantity'),
            ]);
            session()->flash('success',$this->product->name.' Added into store successfully!');
            $this->reset();
            return to_route('vendor.store');
        }
    }
    public function render()
    {
        return view('livewire.vendor.single-shop');
    }

}
