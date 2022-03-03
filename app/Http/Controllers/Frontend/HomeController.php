<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSize;
use App\Models\Store;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $product_categories = ProductCategory::with('products')->get();
        $products = Store::with('product')->get();
        $shops = Vendor::where('confirmed',1)->where('active',1)->get();

        return view('frontend.pages.home', compact('product_categories', 'products','shops'));
    }
    // this function will return product by it id
    public function singleProduct(Vendor $vendor, Store $product)
    {
        return view('frontend.pages.product_details', compact('vendor','product'));
    }
    // this function will return product by it id
    public function shop()
    {
        return view('frontend.pages.shop');
    }

    public function singleShop(Vendor $vendor)
    {
        return view('frontend.pages.single-shop', compact('vendor'));
    }

    public function shopsList()
    {
        $shops = Vendor::where('confirmed',1)->where('active',1)
                        ->orderBy('shop_name')->simplePaginate(20);
        return view('frontend.pages.shops-list', compact('shops'));
    }

    public function becomeAffiliate()
    {
        $user = User::findOrFail(Auth::id());
        $user->update([
            'affiliate_link'=>str()->lower($this->getName($user))
        ]);
        return back()->with('success','Welcome to '.config('app.name').' family! please read our terms and 
        condition regarding to affiliate and partnership');
    }

    public function getName($user) {
        $characters = Hash::make($user->email);
        $randomString = '';
        for ($i = 0; $i < 10; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
        return $randomString;
    }

    public function updateProfile(Request $request)
    {
        $user = User::findOrFail(Auth::id());
        $this->validate($request,[
            'name'=>'required|string|min:5|max:120',
            'phone'=>'string|required|starts_with:25078,25079,25072,25073|digits:12|unique:users,phone,'.$user->id,
            'profile'=>'sometimes|image|mimes:png,jpg,webp|max:800',
            'address'=>'string|required|max:80',
            'neighborhood'=>'string|required|',
            'street'=>'string|sometimes',
        ]);

        if ($request->hasFile('profile')) {
            if ($user->profile) {
                Storage::disk()->delete($user->profile);
            }
            $fileName = str()->slug($request->name).time().'.'.$request->profile->extension();
            $profile = $request->profile->storeAs('Clients',$fileName,'public');
        } else{
            $profile = $user->profile;
        }

        $user->update([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'address1'=>$request->address,
            'neighborhood'=>$request->neighborhood,
            'street_name'=>$request->street,
            'profile'=>$profile,
        ]);

        return back()->with('success','profile updated successfully!');
    }

    public function updatePassword(Request $request)
    {
        $user = User::findOrFail(Auth::id());
        $this->validate($request,[
            'password'=>'string|required|min:6|max:64|confirmed',
            'current_password'=>['string','required',function ($attribute,$value,$fail) use ($user){
                if(!Hash::check($value, $user->password)){
                    return $fail(__('Incorrect Current Password'));
                }
            }],
        ]);
        
        $user->update(['password'=>Hash::make($request->password)]);
        return to_route('dashboard')->with('success','Password Updated Successfuly!');
    }

    public function orders()
    {
        return view('frontend.pages.orders');
    }

    public function singleOrders($order)
    {
        $order = Order::findOrFail(Crypt::decryptString($order));
        return view('frontend.pages.single-order', compact('order'));
    }

    public function al_product_details($id)
    {
        $products = Product::all();
        $product = Product::find($id);
        return view('frontend.pages.al_single_product', compact('product','products'));
    }
}
