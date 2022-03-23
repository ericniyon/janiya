<?php

namespace App\Http\Controllers\Admins;


use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSize;
use App\Models\Transaction;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\ShopOrder;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {
        $dataset1 = "";
        foreach(Order::all() as $res){
                $dataset1.="['".$res->created_at."',  ".$res->total."],";
            }

        $dataset2 = "";
        foreach(Order::all() as $res){
                $dataset2.="['".$res->created_at."',  ".$res->total."],";
            }


        $dataset3 = "";
        foreach(Order::all() as $res){
                $dataset3.="['".$res->created_at."',  ".$res->total."],";
            }
        return view('backend.pages.admin_dashboard', compact('dataset1', 'dataset2', 'dataset3'));
    }

    public function product_category()
    {
        $categories = ProductCategory::all();
        return view('backend.pages.product_category', compact('categories'));
    }


    public function product_product()
    {
        $colors = Color::all();
        $sizes = ProductSize::all();
        $categories = ProductCategory::all();
        return view('backend.pages.add_product', compact('categories', 'colors','sizes'));
    }





    public function profile()
    {
        // $categories = ProductCategory::all();
        return view('backend.admin.profile');
    }

public function save_category(Request $request)
{
    if($request->category_image->getClientOriginalName())
    {
        $extension = $request->category_image->getClientOriginalExtension();
        $file = date('YmdHis').rand(1,99999).'.'.$extension;

        $request->category_image->storeAs('public/storage/category-img', $file);
    }

    else{
        $file = '';
    }

    $product_category = new ProductCategory();
    $product_category->category_name = $request->category_name;
    $product_category->category_image = $file;

    $product_category->save();

    return redirect()->back()->with('message', 'Product category have been created !');


}

    public function admin_orders()
    {
        $orders = Order::paginate(10);
        return view('backend.admin.orders', compact('orders'));
    }

    public function admin_transactions()
    {
        $transactions = Transaction::paginate(10);

        return view('backend.admin.transactions', compact('transactions'));
    }
    public function shopsOrder()
    {

        return view('backend.admin.orders');
    }
    public function janiyaOrders()
    {
        $orders = ShopOrder::paginate(10);
        return view('backend.admin.janiyaorders', compact('orders'));
    }
}
