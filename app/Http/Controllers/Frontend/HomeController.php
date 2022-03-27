<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductAttribute;
use App\Models\StoreAttribute;
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
        $arr = [];
        $stocks = Store::all()->pluck('product_id');

        $products = Product::whereNotIn('id', $stocks)->inRandomOrder()->limit(8)->get();

        $product_categories = ProductCategory::with('products')->get();

        $shops = Vendor::where('confirmed',1)->where('active',1)->get();

        return view('frontend.pages.home1', compact('product_categories','shops', 'products'));
    }
    // this function will return product by it id
    public function singleProduct($vendor, $product)
    {
        $vendor = Vendor::findOrFail(Crypt::decryptString($vendor));
        $product = Store::findOrFail(Crypt::decryptString($product));
        $colors = StoreAttribute::where('store_id',$product->id)
        ->addSelect(DB::raw('DISTINCT(color)'),'id')->get();
        $sizes = StoreAttribute::where('store_id',$product->id)
        ->addSelect(DB::raw('DISTINCT(size)'),'id')->get();
        return view('frontend.pages.product_details', compact('vendor','product','colors','sizes'));
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

    public function shopsList(Request $request)
    {
        // return $request->all();
        $shops = Vendor::all();
        $categories = ProductCategory::all();

        $products_ids = Store::all()->pluck('product_id');

        $sort = '';

        if($request->sort != null){
            $sort = $request->sort;
        }
        if($categories == null ){
            return view('errors.404');
        }
        else{
            if($sort == 'HighToLow'){
                $products = Store::whereHas('product', function($query){ $query->orderBy('price', 'DESC');
                })->select('id','vendor_id','product_id')->distinct('product_id')
                ->simplePaginate(12);
                // $products = Product::whereIn('id', $products_ids)->orderBy('price', 'DESC')->simplePaginate(12);
            }
            elseif($sort == 'LowToHigh'){
                $products = Store::whereHas('product', function($query){ $query->orderBy('price', 'ASC');
                })->select('id','vendor_id','product_id')->distinct('product_id')
                ->simplePaginate(12);
                // $products = Product::whereIn('id', $products_ids)->orderBy('price', 'ASC')->simplePaginate(12);
            }
            else{
                $products = Store::select('id','vendor_id','product_id')->distinct('product_id')
                ->simplePaginate(12);
            // $products = Product::whereIn('id', $products_ids)->simplePaginate(12);

            }
        }

        $route = 'shops';
        return view('frontend.pages.shops-list', ['categories'=> $categories, 'products' => $products, 'shops' => $shops,'route'=> $route]);
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
        $product = Product::find(Crypt::decryptString($id));
        // $all_product = StoreAttribute::find(Crypt::decryptString($id));
// tobe continuewed
        // return $product;

        return view('frontend.pages.al_single_product', compact('product','products'));
    }
    public function about()
    {

        return view('frontend.pages.about');
    }

    public function contact()
    {

        return view('frontend.pages.contact');
    }

    public function categorised($catId)
    {

        $catId = ProductCategory::findOrFail(Crypt::decryptString($catId));
        $products_list = Product::where('product_category_id', $catId->id)->simplePaginate(12);
        $category_name = $catId->category_name;
        return view('frontend.pages.categorised', compact('products_list','category_name'));
    }

    public function shoped($shopId)
    {

        $vendorId = Vendor::findOrFail(Crypt::decryptString($shopId));
        // $vendorId = Vendor::all()->pluck('id');

        $store_ids = Store::where('vendor_id',$vendorId->id)->pluck('id');
        // return $store_ids;
        // $product_ids = Store::find($shopId)->pluck('product_id');

        $shop_name = Vendor::find($vendorId)->pluck('shop_name');


        $products_list = StoreAttribute::whereIn('store_id', $store_ids)->simplePaginate(12);

        return view('frontend.pages.shopssearched', compact('products_list', 'vendorId','shop_name'));
    }

    public function shopFilter(Request $request)
    {
        $data = $request->all();

        $sortByUrl = '';

        if(!empty($data['sortBy']))
        {
            $sortByUrl = '&sortBy='.$data['sortBy'];
        }
        return redirect()->route('shops.list'.$sortByUrl);
    }
}
