<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Vendor;
use Illuminate\Support\Facades\Hash;


class CreateShop extends Component
{
    use WithFileUploads;

    public $name,$shop,$email,$phone,$details,$profile;


     public function store()
    {
        
        $this->validate([
            'name'=>'required|string|min:3|max:120',
            'shop'=>'required|unique:vendors,shop_name|string|min:3|max:120',
            'email'=>'required|email|string|min:5|max:120',
            'phone'=>'required|string|min:10|max:12',
            'details'=>'required|string|min:20',
            'profile'=>'image|mimes:png,jpg,webp|max:700',
        ]);
        
        $password = str()->random(8);
       
        Vendor::create([
            'name'=>$this->name,
            'shop_name'=>$this->shop,
            'slug'=>str()->slug($this->shop),
            'email'=>$this->email,
            'phone'=>$this->phone,
            'confirmed'=>1,
            'active'=>1,
            'details'=>$this->details,
            'profile'=>$this->profile->store('public/shops/gallery'),
            'password'=>Hash::make($password),
        ]);

        return back()->with('success','Vendor Added Successfully!');
    }


    public function render()
    {
        return view('livewire.create-shop');
    }
}
