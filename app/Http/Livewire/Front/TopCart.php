<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class TopCart extends Component
{
    // protected $listeners = ['pageRefresh'=>'$refresh'];
    protected $listeners = ['refreshComponent'=>'$refresh'];
    public function render()
    {
        return view('livewire.front.top-cart');
    }
}
