<?php

namespace App\Http\Livewire\Vendor;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Orders extends Component
{
    use WithPagination;
    public $paginationTheme = 'bootstrap';
    public $searchKey = '', $from = '', $until = '', $perPage = 10, $status = "";
    public $queryString = [
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
    }

    public function render()
    {
        // $itemIds = Auth::guard('vendor')->user()->orderItems()->distinct()->get('id');
        // $itemIds = OrderItem::where('shop',Auth::guard('vendor')->id())->select('order_id')
        // ->distinct()->get();
        // $arr =[];
        // foreach($itemIds as $item){
        //     $arr[] = $item->order_id;
        // } 
        
        $orders = Order::where('vendor_id',Auth::guard('vendor')->id())->when($this->searchKey, function($query){
                        return $query->where('name','like','%'.$this->searchKey.'%')
                                    ->orWhere('orderNo','like','%'.$this->searchKey.'%')
                                    ->orWhere('neighborhood','like','%'.$this->searchKey.'%');
                    })->when($this->from, function($query1){
                        return $query1->whereDate('created_at','>=',$this->from);
                    })->when($this->until, function($query2){
                        return $query2->whereDate('created_at','<=',$this->until);
                    })->when($this->status, function($query3){
                        return $query3->where('Status',$this->status);
                    })->orderByDesc('created_at')
                    ->paginate($this->perPage);

        return view('livewire.vendor.orders', compact('orders'));
    }
}
