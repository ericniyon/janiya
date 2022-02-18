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
    public $promote = false, $selected_user, $user_name, $promoter_code;
    public $queryString = [
        'perPage'=>['except'=>10],
        'searchKey'=>['except'=>''],
        'active'=>['except'=>null],
        'confirmed'=>['except'=>''],
    ];

    public function promoteForm($id)
    {
        $user = User::findOrFail($id);
        $this->promote = true;
        $this->selected_user = $user->id;
        $this->user_name = $user->name;
    }

    public function closeForm()
    {
        $this->promote = false;
    }

    public function promote()
    {
        $user = User::findOrFail($this->selected_user);
        $this->validate([
            'promoter_code'=>'required|unique:users,promo_code|string|min:4|max:120',
        ]);
        $user->update([
            'promo_code'=>$this->promoter_code,
            'commission_id'=>1,
        ]);
        $this->reset();
        $this->promote = false;
        $this->emit('alert',['type'=>'success','message'=>'Affiliator Promoted Successfully!']);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'promoter_code'=>'required|unique:users,promo_code|string|min:4|max:120',
        ]);
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
                        ->whereNull('promo_code')
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
