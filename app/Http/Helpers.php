<?php

use App\Models\Coupon;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\Cookie;

if (! function_exists('money')) {
    function money($money)
    {
        return number_format($money).__(' Rwf');
    }
}

if (! function_exists('getDiscount')) {
    function getDiscount()
    {
        $discountAmount = 0;

        if(Session::has('coupon')){
            if (!\Cart::isEmpty()) {
                $subtotal = \Cart::getSubTotal();
                if(Session::get('coupon')['type'] == 'Fixed'){
                    $discountAmount = Session::get('coupon')['value'];
                } else if(Session::get('coupon')['type'] == 'Percentage'){
                    $discountAmount = $subtotal * Session::get('coupon')['value'] / 100;
                }
            }
        } 

        return $discountAmount;
    }
}

if (! function_exists('removeCoupon')) {
    function removeCoupon()
    {
        Session::forget('coupon');
    }
}

if (! function_exists('referencedBy')) {
    function referencedBy()
    {
        if (Cookie::has('referredBy')) {
            $user = User::findOrFail(Cookie::get('referredBy'));
        } else{
            $user = null;
        }

        return $user;
    }
}
if (! function_exists('removePromoCode')){
    function removePromoCode(){
        if (Cookie::has('referredBy')) {
            Cookie::queue(Cookie::forget('referredBy'));
        } else{
            session()->flash('success','Promo Code not found!');
        }
    }
}

function addCoupon($couponCode){
    $coupon = Coupon::where('coupon_code',$couponCode)->first();
        if(!$coupon){
            // session()->flash('error','Invalid Coupon Code!!');
            return back()->with('error','Invalid Coupon Code!!');
        }
        if($coupon->expire_at < today()){
            // session()->flash('error','Your Coupon Code was Expered Recently!!');
            return back()->with('error','Your Coupon Code was Expered Recently!!');
        }
        session()->put('coupon',[
            'name'=>$coupon->name,
            'type'=>$coupon->type,
            'value'=>$coupon->value,
        ]);
}

function applyPromoCode($promocode){
    if (Cookie::has('referredBy')) {
        Cookie::queue(Cookie::forget('referredBy'));
    }
    $promo = User::where('promo_code',$promocode)->first();
    if(!$promo){
        // session()->flash('error1','Promo Code not found or is invalid!!');
        return back()->with('error1','Promo Code not found or is invalid!!');
    }
    session()->flash('success1','Promo Code Applied Successfully');
    Cookie::queue('referredBy',$promo->id,60 * 60 * 24 * 187);
}