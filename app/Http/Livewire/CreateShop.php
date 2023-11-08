<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Vendor;
use Illuminate\Support\Facades\Hash;


class CreateShop extends Component
{
    use WithFileUploads;

    public $name,$shop,$email,$phone,$details,$profile, $brand;


     public function store()
    {
        // dd($this->brand);
        $this->validate([
            'name'=>'required|string|min:3|max:120',
            'shop'=>'required|unique:vendors,shop_name|string|min:3|max:120',
            'email'=>'required|email|string|min:5|max:120',
            'phone'=>'required|string|min:10|max:12',
            'details'=>'required|string|min:20',
            'profile'=>'required|image',
            'brand'=>'required|image',
        ]);
        
        $password = str()->random(8);

        $profileImg = $this->profile->store('shop_profile','s3');
        $brandImg = $this->brand->store('shop_brand','s3');
        // $brandImg = cloudinary()->upload($this->brand->getRealPath())->getSecurePath();
       
        Vendor::create([
            'name'=>$this->name,
            'shop_name'=>$this->shop,
            'slug'=>str()->slug($this->shop),
            'email'=>$this->email,
            'phone'=>$this->phone,
            'confirmed'=>1,
            'active'=>1,
            'details'=>$this->details,
            'profile'=>$profileImg,
            'brand'=>$brandImg,

            // 'profile'=>$this->profile->store('public/shops/gallery'),
            // 'brand'=>$this->profile->store('public/shops/gallery'),
            'password'=>Hash::make($password),
        ]);

        return to_route('shops.list');
        
    }


    public function render()
    {
        return view('livewire.create-shop');
    }
}
