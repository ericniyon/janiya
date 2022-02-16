<?php

namespace App\Http\Livewire\Admin;

use App\Models\Vendor;
use Livewire\Component;
use Livewire\WithPagination;

class Shops extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10, $searchKey = '', $active = null, $confirmed = '';

    public $queryString = [
        'perPage'=>['except'=>10],
        'searchKey'=>['except'=>''],
        'active'=>['except'=>null],
        'confirmed'=>['except'=>''],
    ];

    public function render()
    {
        $shops = Vendor::where('name','like','%'.$this->searchKey.'%')
                        ->orWhere('phone','like','%'.$this->searchKey.'%')
                        ->orWhere('email','like','%'.$this->searchKey.'%')
                        ->when($this->active, function($query){
                            $query->where('active',$this->active);
                        })
                        ->when($this->confirmed, function($query1){
                            $query1->where('confirmed',$this->confirmed);
                        })->orderByDesc('created_at')
                        ->paginate($this->perPage);
        return view('livewire.admin.shops', compact('shops'));
    }
}