<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BecomeVendor as BEVendor;

class BecomeVendor extends Component
{
     public $first_name,$last_name,$email,$phone,$facebook,$linkdin, $instagram, $address;


    public function store(){
        
            // $this->validate([
            // 'first_name'=>'required|string|min:3|max:120',
            // 'last_name'=>'required|string|min:3|max:120',
            // 'email'=>'required|email|string|min:5|max:120',
            // 'phone'=>'required|string|min:10|max:12',
            // 'facebook'=>'required|string',
            // 'linkdin'=>'required',
            // 'instagram'=>'required',
            // 'address'=>'required',
            // ]);

            BEVendor::create([
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'facebook'=>$this->facebook,
            'linkdin'=>$this->linkdin,
            'instagram'=>$this->instagram,
            'address'=>$this->address
        ]);

        return redirect('/');
    }


    public function render()
    {
        return view('livewire.become-vendor');
    }
}
