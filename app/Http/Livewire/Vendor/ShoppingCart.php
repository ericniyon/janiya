<?php

namespace App\Http\Livewire\Vendor;

use App\Http\Traits\AddToCartTrait;
use App\Mail\OrderMail;
use App\Models\Store;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ShoppingCart extends Component
{
    use AddToCartTrait;
    public function removeItem($proId)
    {
        $this->removeFromCart($proId);
        $this->emit('alert',['type'=>'success','message'=>'Product removed from cart successfully']);
    }

    public function increase($proId)
    {
        $this->increaseQuantity($proId);
        $this->emit('alert',['type'=>'success','message'=>'Cart quantity updated successfully']);
    }

    public function decrease($proId)
    {
        $this->decreaseQuantity($proId);
        $this->emit('alert',['type'=>'success','message'=>'Cart quantity updated successfully']);
    }

    public function confirmOrder()
    {
        $productIds = [];
        foreach (\Cart::getContent() as $item) {
            $productIds[] = $item->attributes['productID'];
        }
        $final_ids = array_unique($productIds);
        foreach ($final_ids as $value) {
            $store = Store::create([
                'vendor_id'=>Auth::guard('vendor')->id(),
                'product_id'=>$value,
            ]);
            $total_amount = 0;
            foreach(\Cart::getContent() as $item){
                if($item->attributes['productID']!= $value){
                    continue;
                }
                $stored_item = $store->valiations()->create([
                    'product_attribute_id'=>$item->model->id,
                    'quantity'=>$item->quantity,
                    'size'=>$item->attributes['size'],
                    'color'=>$item->attributes['color'],
                ]);
                $item->model->update(['quantity'=>$item->model->quantity - $item->quantity]);
                $total_amount = $item->quantity*$item->price;
            }
            # code...
            $store->orders()->create([
                'total_amount'=>$total_amount,
            ]);
            // return $store;
            // $user = $store->shop;
            // Mail::to($user)->send(new OrderMail($store));
        }
        \Cart::clear();
        // Notification::send($user, new OrderMail('Eric NIYONKURU', 'Kimihurura', '0787283351'));
        return to_route('vendor.store');
    }

    public function render()
    {
        return view('livewire.vendor.shopping-cart');
    }
}
