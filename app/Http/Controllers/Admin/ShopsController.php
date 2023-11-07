<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ShopsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|string|min:3|max:120',
            'shop'=>'required|unique:vendors,shop_name|string|min:3|max:120',
            'email'=>'required|email|string|min:5|max:120',
            'phone'=>'required|string|min:10|max:12',
            'details'=>'required|string|min:20',
            'profile'=>'required',
        ]);
        
        $password = str()->random(8);
        if ($request->hasFile('logo')) {
            $fileName = str()->slug($request->shop).time().'.'.$request->logo->extension();
            $profile = $request->logo->storeAs('vendors',$fileName,'public');
        }
        Vendor::create([
            'name'=>$request->name,
            'shop_name'=>$request->shop,
            'slug'=>str()->slug($request->shop),
            'email'=>$request->email,
            'phone'=>$request->phone,
            'confirmed'=>1,
            'active'=>1,
            'details'=>$request->details,
            'profile'=>$profile,
            'password'=>Hash::make($password),
        ]);

        return back()->with('success','Vendor Added Successfully!');
    }

    public function edit($id)
    {
        $vendor = Vendor::find($id);
        
        return view('backend.admin.edit', compact('vendor'));
    }

    public function update(Vendor $vendor, Request $request)
    {
        return $request->all();
        $this->validate($request,[
            'name'=>'required|string|min:3|max:120',
            'shop'=>'required|unique:vendors,shop_name,'.$vendor->id.'|string|min:3|max:120',
            'email'=>'required|email|string|min:5|max:120',
            'phone'=>'required|string|min:10|max:12',
            'details'=>'required|string|min:20',
            'profile'=>'sometimes|image|mimes:png,jpg,webp|max:700',
            'brand'=>'sometimes|image|mimes:png,jpg,webp|max:700',
        ]);
        if ($request->hasFile('logo')) {
            if ($vendor->profile) {
                Storage::delete($vendor->profile);
            }
            $fileName = str()->slug($request->shop).time().'.'.$request->logo->extension();
            $profile = $request->logo->storeAs('vendors',$fileName,'public');
        } else{
            $profile = $vendor->profile;
        }
         $profileImg = cloudinary()->upload($request->profile->getRealPath())->getSecurePath();
        $brandImg = cloudinary()->upload($request->brand->getRealPath())->getSecurePath();
       
        $vendor->update([
            'name'=>$request->name,
            'slug'=>str()->slug($request->shop),
            'shop_name'=>$request->shop,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'details'=>$request->details,
            'profile'=>$profileImg,
            'brand'=>$brandImg,
        ]);

        session()->flash('success','Vendor updated successfully');
        return to_route('admin.shops');
    }
}
