<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AddPromoCodeModal extends Component
{
    public $user, $promo_code;

    public function mount($user)
    {
        $this->user = $user;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'promo_code'=>'required|unique:users,promo_code|string|min:4|max:120',
        ]);
    }

    public function store()
    {
        $this->validate([
            'promo_code'=>'required|unique:users,promo_code|string|min:4|max:120',
        ]);
        $user = User::findOrFail($this->user->id);
        $user->update(['promo_code'=>$this->promo_code]);
        $this->reset();
    }
    public function render()
    {
        return view('livewire.admin.add-promo-code-modal');
    }
}
