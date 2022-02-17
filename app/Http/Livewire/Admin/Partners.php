<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Partners extends Component
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

    public function changeStatus($id)
    {
        $user = User::findOrFail($id);
        $user->update(['active'=>!$user->active]);
        $this->emit('alert',['type'=>'success','message'=>'Active status changed successfully!']);
    }

    public function render()
    {
        $partners = User::where('promo_code','!=',null)
                        ->when($this->active, function($query){
                            $query->where('active',$this->active);
                        })
                        ->when($this->searchKey, function($query0){
                            $query0->where('name','like','%'.$this->searchKey.'%')
                            ->orWhere('phone','like','%'.$this->searchKey.'%')
                            ->orWhere('promo_code','like','%'.$this->searchKey.'%')
                            ->orWhere('email','like','%'.$this->searchKey.'%');
                        })
                        ->when($this->confirmed, function($query1){
                            $query1->where('confirmed',$this->confirmed);
                        })
                        ->orderByDesc('created_at')
                        ->paginate($this->perPage);
        return view('livewire.admin.partners', compact('partners'));
    }
}
