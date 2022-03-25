<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use App\Models\ShopOrder;



class Orders extends Component
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
        $order = ShopOrder::findOrFail($order);
        $order->update(['status'=>$status]);
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
        $orders = ShopOrder::when($this->searchKey, function($query){
                        return $query->where('total_amount','like','%'.$this->searchKey.'%')
                                    ->orWhere('orderNo','like','%'.$this->searchKey.'%')
                                    ;
                    })->when($this->from, function($query1){
                        return $query1->whereDate('created_at','>=',$this->from);
                    })->when($this->until, function($query2){
                        return $query2->whereDate('created_at','<=',$this->until);
                    })->when($this->status, function($query3){
                        return $query3->where('status',$this->status);
                    })->orderByDesc('created_at')
                    ->paginate(10);
        return view('livewire.admin.orders', compact('orders'));
    }
}
