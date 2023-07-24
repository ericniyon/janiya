<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ShopOrder;
use App\Models\Order;

class JaniyaOrders extends Component
{

    public $active = 1, $payment_confirmed = '';
    public $searchKey = '', $from = '', $until = '', $perPage = 10, $status = "";


    public $queryString = [
        'active'=>['except'=>null],
        'payment_confirmed'=>['except'=>''],
        'perPage'=>['except'=>10],
        'searchKey'=>['except'=>''],
        'from'=>['except'=>''],
        'until'=>['except'=>''],
        'status'=>['except'=>''],
    ];

    public function changeStatus($status, $order)
    {
        $order = Order::findOrFail($order);
        $order->update(['Status'=>$status]);
        session()->flash('message', 'Order status changed successfully!');

    }

    public function confirm($id)
    {
        $shop = ShopOrder::findOrFail($id);
        $shop->update(['payment_confirmed'=>!$shop->payment_confirmed]);
        session()->flash('message', 'Order Payment status changed successfully!');
        // $this->emit('alert',['type'=>'success','message'=>'']);
    }


    public function render()
    {
        $orders = Order::where('store_attributes_id', null)->when($this->searchKey, function($query){
                        return $query->where('name','like','%'.$this->searchKey.'%')
                                    ->orWhere('orderNo','like','%'.$this->searchKey.'%')
                                    ;
                    })->when($this->from, function($query1){
                        return $query1->whereDate('created_at','>=',$this->from);
                    })->when($this->until, function($query2){
                        return $query2->whereDate('created_at','<=',$this->until);
                    })->when($this->status, function($query3){
                        return $query3->where('Status',$this->status);
                    })->orderByDesc('created_at')
                    ->paginate(10);
        return view('livewire.admin.Go-Green-orders', compact('orders'));
    }
}
