<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\MOdels\Vendor;

use Livewire\WithFileUploads;


class EditShop extends Component
{
    use WithFileUploads;

    public $vendor, $shopUpdate;

    public $name,$shop,$email,$phone,$details,$profile, $brand;

    public $p1, $p2;
    public $brandPhoto, $profilePhoto;

    public function mount(){
        $shop = Vendor::where('id', $this->vendor->id)->first();

        $this->name = $shop->name;
        $this->shop = $shop->shop_name;
        $this->email = $shop->email;
        $this->phone = $shop->phone;
        $this->details = $shop->details;
        $this->profile = $shop->profile;
        $this->brand = $shop->brand;


        $this->shopUpdate = $shop;

    }



  public function update()
    {
        // $$profileImg;
        // $$brandImg;
        if ($this->p1) {
            # code...
            $profilePhoto = $this->profile->store('shop_profile');
        
            
        }
        if ($this->p2) {
            # code...
           $brandPhoto = $this->brand->store('shop_brand');
        }
        
        $this->shopUpdate->update([
            'name'=>$this->name,
            'shop_name'=>$this->shop,
            'slug'=>str()->slug($this->shop),
            'email'=>$this->email,
            'phone'=>$this->phone,
            'confirmed'=>1,
            'active'=>1,
            'details'=>$this->details,
            'profile'=>$this->profilePhoto ? $this->profilePhoto : $this->profile,
            'brand'=>$this->brandPhoto ? $this->brandPhoto : $this->brand,
           

            // 'profile'=>$this->profile->store('public/shops/gallery'),
            // 'brand'=>$this->profile->store('public/shops/gallery'),
        ]);

        return to_route('admin.shops');
        
    }



    public function render()
    {
        return view('livewire.edit-shop');
    }
}
