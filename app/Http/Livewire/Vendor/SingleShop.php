<?php

namespace App\Http\Livewire\Vendor;

use App\Models\ProductCategory;
use App\Models\ProductAttribute;
use App\Models\Store;
use App\Models\StoreAttribute;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\OrderNotification;

class SingleShop extends Component
{
    public $product, $name, $quantity1, $items, $categories;

    public $messages =  ["items.*.order_quantity.lte" => "Requested quantity not available",];

    public function mount($product)
    {
        $this->items = [[]];
        $this->product = $product;
        $this->categories = ProductCategory::select('id','category_name')->get();
    }

    public function addNewRow()
    {
        $this->items[] = [];
    }

    public function updatedItems($value, $nested)
    {
        $data = explode(".", $nested);
        if ($data[1] == 'attribute') {
            $this->quantity1 = ProductAttribute::where('id', $value)->pluck("quantity")->first();
            $this->items[$data[0]] = [
                'finalquantity' => $this->quantity1,
                'attribute' => $this->items[$data[0]]['attribute'],
                // 'order_quantity' =>$this->items[$data[0]]['order_quantity'],
            ];
        }
    }

    public function removeRow($index)
    {
        unset($this->items[$index]);
        $this->items = array_values($this->items);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'items.*.attribute'=>'required|integer',
            'items.*.order_quantity'=>'required|integer|min:5|lte:items.*.finalquantity',
        ]);
    }

    public function store()
    {
        $this->validate([
            'items.*.attribute'=>'required|integer',
            'items.*.order_quantity'=>'required|integer|min:5|lte:items.*.finalquantity',
        ]);
        $store = Store::create([
            'vendor_id'=>Auth::guard('vendor')->id(),
            'product_id'=>$this->product->id,
        ]);
        foreach($this->items as $key=>$item){
            $attribute = ProductAttribute::findOrFail($item['attribute']);
            $stored_item = $store->valiations()->create([
                'product_attribute_id'=>$attribute->id,
                'quantity'=>$item['order_quantity'],
                'size'=>$attribute->size,
                'color'=>$attribute->color,
            ]);

            $attribute->update(['quantity'=>$attribute->quantity - $item['order_quantity']]);
        }

        $store->orders()->create([
            'total_amount'=>$store->product->price * $store->valiations()->sum('quantity'),
        ]);
        session()->flash('success',$this->product->name.' Added into store successfully!');
        $this->reset();
        // return $store;
        $user = User::first();
        Notification::send($user, new OrderNotification('Eric NIYONKURU', 'Kimihurura', '0787283351'));
        return to_route('vendor.store');
    }
    public function render()
    {
        return view('livewire.vendor.single-shop');
    }
}
