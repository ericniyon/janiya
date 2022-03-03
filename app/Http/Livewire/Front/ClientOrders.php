<?php

namespace App\Http\Livewire\Front;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ClientOrders extends Component
{
    use WithPagination;
    public $paginationTheme = 'bootstrap';

    public $perPage = 10, $starting_date = '', $until = '';
    public $queryString = [
        'perPage'=>['except'=>10],
        'starting_date'=>['except'=>''],
        'until'=>['except'=>''],
    ];

    public function render()
    {
        $orders = Auth::user()->orders()
                        ->when($this->starting_date,function($query1){
                            return $query1->whereDate('created_at','>=',$this->starting_date);
                        })
                        ->when($this->until,function($query){
                            return $query->whereDate('created_at','>=',$this->until);
                        })
                        ->orderByDesc('created_at')
                        ->paginate($this->perPage);
        return view('livewire.front.client-orders', compact('orders'));
    }
}
