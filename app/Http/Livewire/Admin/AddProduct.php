<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class AddProduct extends Component
{
    protected $listeners = ['InsertItemsComponent' => '$refresh'];
    
    public $users, $unities, $products, $slots, $items, $owner, $quantity1;

    public function mount()
    {
        $cats=[];
        foreach(json_decode($categories) as $key=>$cat){
            $cats[] = $cat;
        }
        
        $this->items = [[]];
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
            'owner'=>'bail|required',
            'items.*.item'=>'required',
            'items.*.slot'=>'required',
            'items.*.quantity'=>'required|integer',
            'items.*.duration'=>'required|date|after:'.Carbon::now(),
        ]);

        
    }

    public function store()
    {
        $this->validate([
            'owner'=>'bail|required',
            'items.*.item'=>'required',
            'items.*.slot'=>'required',
            'items.*.quantity'=>'required|integer',
            'items.*.duration'=>'required|date|after:'.Carbon::now(),
        ]);
        
        foreach($this->items as $key=>$item){
            $product = Product::create([
                'item_id'=>$item['item'],
            ]);
        }
        return to_route('manager.products');
    }
    public function render()
    {
        return view('livewire.admin.add-product');
    }
}
