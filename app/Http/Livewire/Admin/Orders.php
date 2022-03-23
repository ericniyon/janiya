<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use App\Models\ShopOrder;



class Orders extends Component
{
    public $active = 1, $confirmed = '';


    public $queryString = [
        'active'=>['except'=>null],
        'confirmed'=>['except'=>''],
    ];

    public function changeStatus($id)
    {
        $shop = ShopOrder::findOrFail($id);
        $shop->update(['payment_confirmed'=>!$shop->active]);
        $this->emit('alert',['type'=>'success','message'=>'Active status changed successfully!']);
    }

    public function confirm($id)
    {
        $shop = ShopOrder::findOrFail($id);
        $shop->update(['confirmed'=>!$shop->confirmed]);
        $this->emit('alert',['type'=>'success','message'=>'Active status changed successfully!']);
    }

    public function render()
    {
        return view('livewire.admin.orders', [
            'orders' => $orders = Order::paginate(10)
        ]);
    }
}
