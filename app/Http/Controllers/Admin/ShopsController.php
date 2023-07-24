<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vendor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ShopRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ShopsController extends Controller
{
    public function store(ShopRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Str::random(8);
        if ($request->hasFile('logo')) {
            $fileName = Str::slug($request->shop).time().'.'.$request->logo->extension();
            $data['profile_image'] = $request->logo->storeAs('vendors',$fileName,'public');
        }

        if ($request->hasFile('logo')) {
            $fileName = Str::slug($request->shop).time().'.'.$request->logo->extension();
            $data['cover_image'] = $request->logo->storeAs('vendors',$fileName,'public');
        }
        Vendor::create($data);

        return back()->with('success','Vendor Added Successfully!');
    }

    public function edit($id)
    {
        $vendor = Vendor::find($id);
        return view('backend.admin.addEditShops', compact('vendor'));
    }

    public function update(Vendor $vendor, ShopRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('logo')) {
            if($vendor->profile_image){
                Storage::disk('public')->delete($vendor->profile_image);
            }
            $fileName = Str::slug($request->shop).time().'.'.$request->logo->extension();
            $data['profile_image'] = $request->logo->storeAs('vendors',$fileName,'public');
        } else {
            $data['profile_image'] = $vendor->profile_image;
        }

        if ($request->hasFile('logo')) {
            if($vendor->cover_image){
                Storage::disk('public')->delete($vendor->cover_image);
            }
            $fileName = Str::slug($request->shop).time().'.'.$request->logo->extension();
            $data['cover_image'] = $request->logo->storeAs('vendors',$fileName,'public');
        } else {
            $data['cover_image'] = $vendor->cover_image;
        }
        $vendor->update($data);

        session()->flash('success','Vendor updated successfully');
        return to_route('admin.shops');
    }
}
