<?php

namespace App\Http\Livewire\Vendor;

use App\Models\ProductValiations;
use App\Models\Store as ModelsStore;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
class Store extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $perPage = 10, $searchkey = '';
    public $addToStoreForm = false,$product, $quantity, $actualProduct;

    public function addToStore($id)
    {
        $product = ProductValiations::findOrFail($id);
        $this->addToStoreForm = true;
        $this->product = $product->id;
        $this->actualProduct = $product->product->name;
    }
    
    public function cancelAddToStore()
    {
        $this->addToStoreForm = false;
    }

    public function addProductToStore()
    {
        $product = ProductValiations::findOrFail($this->product);
        $this->validate(['quantity'=>'required|integer|min:10|max:'.$product->quantity - 5]);
        $store = ModelsStore::find($product->id);
        if($store->count() > 0){
            $store->update(['quantity'=>$this->quantity]);
        } else{
            ModelsStore::create([
                'user_id'=>Auth::user()->id, 
                'product_valiations_id'=>$product->id, 
                'quantity'=>$this->quantity,
            ]);
        }
        $product->update(['quantity'=>$product->quantity - $this->quantity]);
        
        $this->reset();
        $this->addToStoreForm = false;
        $this->emit('alert',['type'=>'success','message'=>'Product added to store']);
    }
    public function render()
    {
        $products = ProductValiations::with('product','color','size')
                    ->where('quantity','>',1)
                    ->paginate($this->perPage);
        return view('livewire.vendor.store', compact('products'));
    }
}
