<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\Models\Transaction;
use App\Models\ShopOrder;


class PartnersController extends Controller
{
    public function viewAll()
    {
        $partners = User::whereNotNull('promo_code')->get();
        if (is_array($partners)) {
            return response()->json(['status' => true, 'data' => $partners], 200);
        }else {
            return response()->json(['status' => false, 'data' => 'No data to display'], 200);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|string|min:3|max:120',
            'promo_code'=>'required|unique:users,promo_code|string|min:3|max:120',
            'email'=>'required|unique:users,email|email|string|min:5|max:120',
            'phone'=>'required|unique:users,phone|string|min:10|max:12',
            'profile'=>'nullable|image|mimes:png,jpg,webp|max:700',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $password = str()->random(8);
        if ($request->file('profile')) {
            $fileName = str()->slug($request->promo_code).time().'.'.$request->profile->extension();
            $profile = $request->profile->storeAs('vendors',$fileName,'public');
        }
        $results = User::create([
            'name'=>$request->name,
            'promo_code'=>$request->promo_code,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'profile'=>$profile,
            'password'=>Hash::make($password),
        ]);
        if (is_array($partners)) {
            return response()->json(['status' => true, 'data' => $partners], 200);
        }else {
            return response()->json(['status' => false, 'data' => 'No data to display'], 200);
        }
    }

    public function shopsOrder()
    {
        $orders = ShopOrder::all();
        if (is_array($orders)) {
            return response()->json(['status' => true, 'data' => $orders], 200);
        }else {
            return response()->json(['status' => false, 'data' => 'No data to display'], 200);
        }
    }

    public function janiyaOrders()
    {
        $transactions = Transaction::all();
        if (is_array($transactions)) {
            return response()->json(['status' => true, 'data' => $transactions], 200);
        }else {
            return response()->json(['status' => false, 'data' => 'No data to display'], 200);
        }
    }
}
