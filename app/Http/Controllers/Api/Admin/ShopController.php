<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Validator;

class ShopController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|string|min:3|max:120',
            'shop'=>'required|unique:vendors,shop_name|string|min:3|max:120',
            'email'=>'required|email|string|min:5|max:120',
            'phone'=>'required|string|min:10|max:12',
            'details'=>'required|string|min:20',
            'profile'=>'nullable|image|mimes:png,jpg,webp|max:700',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $password = "shop@123";
        $profile="";
        if ($request->hasFile('logo')) {
            $fileName = str()->slug($request->shop).time().'.'.$request->logo->extension();
            $profile = $request->logo->storeAs('vendors',$fileName,'public');
        }
        $data = Vendor::create([
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
        return response()->json(['status' => true, 'data' => 'Shop have been generated successfully','data' => $data], 200);
    }

    public function edit($id, Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|string|min:3|max:120',
            'shop'=>'required|unique:vendors,shop_name,'.$id.'|string|min:3|max:120',
            'email'=>'required|email|string|min:5|max:120',
            'phone'=>'required|string|min:10|max:12',
            'details'=>'required|string|min:20',
            'profile'=>'sometimes|image|mimes:png,jpg,webp|max:700',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $vendor = Vendor::where('id', $id)->first();
        if ($request->file('profile')) {
            if ($vendor->profile) {
                Storage::delete($vendor->profile);
            }
            $fileimg = $request->file('profile');
            $profile = $request->file('profile')->move('products/gallery/', $vendor->name.$vendor->id.".".$fileimg->extension());
        } else{
            $profile = $vendor->profile;
        }
        $data = Vendor::where('id', $id)
            ->update([
            'name'=>$request->name,
            'slug'=>str()->slug($request->shop),
            'shop_name'=>$request->shop,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'details'=>$request->details,
            'profile'=>$profile,
        ]);

        if ($data) {
            return response()->json(['status' => true, 'data' => 'Shop have been updated successfully'], 200);
        }else {
            return response()->json(['status' => true, 'data' => 'Shop have not been updated','data'], 200);
        }
    }
}
