<?php

namespace App\Http\Livewire\Vendor;

use Auth;
use Livewire\Component;
use App\Models\VendorInvoice;

class Invoice extends Component
{


    public $active = 1, $payment_confirmed = '';
    public $searchKey = '', $from = '', $until = '', $perPage = 10, $status = "", $vendor='';


        public $queryString = [
        'active'=>['except'=>null],
        'payment_confirmed'=>['except'=>''],
        'perPage'=>['except'=>10],
        'searchKey'=>['except'=>''],
        'from'=>['except'=>''],
        'until'=>['except'=>''],
        'status'=>['except'=>''],
    ];

    public function render()
    {
        $user = Auth::user();
        $invoices = VendorInvoice::where('vendor_id', $user->id)->when($this->from, function($query1){
                        return $query1->whereDate('created_at','>=',$this->from);
                    })->when($this->until, function($query2){
                        return $query2->whereDate('created_at','<=',$this->until);
                    })->orderByDesc('created_at')->get();
        return view('livewire.vendor.invoice', compact('invoices'));
    }
}
