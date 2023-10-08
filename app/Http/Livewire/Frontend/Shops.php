<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Vendor;


class Shops extends Component
{
    public $shops = [];

    public function mount()
    {
        $this->shops = Vendor::all();
    }



    public function render()
    {
        return view('livewire.frontend.shops');
    }
}
