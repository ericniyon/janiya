<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subscribe as SbuscribeModel;

class Subscribe extends Component
{
    public $email;


    public function send()
    {
        $this->validate(['email' => 'required']);
        SbuscribeModel::create(['email'=>$this->email]);
        session()->flash('msg', 'Thank you for subscription !');
    }
    public function render()
    {
        return view('livewire.subscribe');
    }
}
