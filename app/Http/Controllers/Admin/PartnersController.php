<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PartnersController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|string|min:3|max:120',
            'promo_code'=>'required|unique:users,promo_code|string|min:3|max:120',
            'email'=>'required|unique:users,email|email|string|min:5|max:120',
            'phone'=>'required|unique:users,phone|string|min:10|max:12',
            'profile'=>'nullable|image|mimes:png,jpg,webp|max:700',
        ]);
        $password = str()->random(8);
        if ($request->hasFile('profile')) {
            $fileName = str()->slug($request->promo_code).time().'.'.$request->profile->extension();
            $profile = $request->profile->storeAs('vendors',$fileName,'public');
        }
        User::create([
            'name'=>$request->name, 
            'promo_code'=>$request->promo_code, 
            'commission_id'=>1,
            'email'=>$request->email, 
            'phone'=>$request->phone, 
            'profile'=>$profile, 
            'password'=>Hash::make($password),
        ]);

        return back()->with('success','Vendor Added Successfully!');
    }

    public function edit(User $user)
    {
        return view('backend.admin.addEditpartner', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $this->validate($request,[
            'name'=>'required|string|min:3|max:120',
            'promo_code'=>'required|unique:users,promo_code,'.$user->id.'|string|min:3|max:120',
            'email'=>'required|unique:users,email,'.$user->id.'|email|string|min:5|max:120',
            'phone'=>'required|unique:users,phone,'.$user->id.'|string|min:10|max:12',
            'profile'=>'sometimes|image|mimes:png,jpg,webp|max:700',
        ]);
        if ($request->hasFile('logo')) {
            if ($user->profile) {
                Storage::disk()->delete($user->profile);
            }
            $fileName = str()->slug($request->promo_code).time().'.'.$request->logo->extension();
            $profile = $request->logo->storeAs('users_profile',$fileName,'public');
        } else{
            $profile = $user->profile;
        }
        $user->update([
            'name'=>$request->name, 
            'promo_code'=>$request->promo_code, 
            'email'=>$request->email, 
            'phone'=>$request->phone,
            'profile'=>$profile,
        ]);

        session()->flash('success','Partner updated successfully');
        return to_route('admin.partners');
    }
}
