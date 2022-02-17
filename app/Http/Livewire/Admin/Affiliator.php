<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Affiliator extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $perPage = 10, $searchKey = '', $active = null, $confirmed = '', $promo_code;

    public $queryString = [
        'perPage'=>['except'=>10],
        'searchKey'=>['except'=>''],
        'active'=>['except'=>null],
        'confirmed'=>['except'=>''],
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'promo_code'=>'required|unique:users,promo_code|string|min:4|max:120',
        ]);
    }

    public function store($id)
    {
        $this->validate([
            'promo_code'=>'required|unique:users,promo_code|string|min:4|max:120',
        ]);
        $user = User::findOrFail($id);
        $user->update(['promo_code'=>$this->promo_code]);
        $this->reset();
    }

    public function changeStatus($id)
    {
        $user = User::findOrFail($id);
        $user->update(['active'=>!$user->active]);
        $this->emit('alert',['type'=>'success','message'=>'Active status changed successfully!']);
    }

    public function render()
    {
        $affiliators = User::whereNotNull('affiliate_link')
                        ->when($this->active, function($query){
                            $query->where('active',$this->active);
                        })
                        ->when($this->searchKey, function($query0){
                            $query0->where('name','like','%'.$this->searchKey.'%')
                            ->orWhere('phone','like','%'.$this->searchKey.'%')
                            ->orWhere('promo_code','like','%'.$this->searchKey.'%')
                            ->orWhere('email','like','%'.$this->searchKey.'%');
                        })
                        ->orderByDesc('created_at')
                        ->paginate($this->perPage);
        return view('livewire.admin.affiliator', compact('affiliators'));
    }
}
