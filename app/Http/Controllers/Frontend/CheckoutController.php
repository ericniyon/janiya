<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\CustomerNewOrder;
use App\Models\Order;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function checkout()
    {
        if(\Cart::isEmpty()){
            return back()->with('success','your shopping cart is empty!!');
        }
        return view('frontend.pages.checkout');
    }


    public function payment(Request $req)
    {
        $this->validate($req,[
            'name'=>'required|string|min:3|max:120',
            'email'=>'email|string|required|min:5|max:120',
            'phone'=>"required_without:email|sometimes|string|size:10|starts_with:078,079,072,073",
            'address'=>'required|string|min:3|max:255',
            'street'=>'required|string|min:3|max:100',
            'neighborhood'=>'required|string|min:3|max:120',
        ]);
        $amount = \Cart::getTotal() - getDiscount();
        $request = [
            'tx_ref' => time(),
            'amount' => $amount,
            'currency' => 'RWF',
            'style' => [
                'color' => 'blue'
            ],
            'payment_options' => 'card',
            'redirect_url' => config('app.url').':8000/proccesspayment',
            'customer' => [
                'email' => 'niyoeri6@gmail.com',

             ],
            'meta' => [
               'price' => $amount
            ],

            'customizations' => [
                'style' => [
                    'background' => 'blue'
                ],
               'title' => 'Janiya',
               'description' => 'Expert In Pethood',
               'theme' => '#000000',

            ]
            ];

            //flutterwave endpoint
            $curl= curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.flutterwave.com/v3/payments',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS =>10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($request),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer FLWSECK-35001ee084cc40d5e3695bb1228a0060-X',
                'Content-Type: application/json'
            ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);

            echo "<pre>";
            echo $response;
            echo "</pre>";

            $res= json_decode($response);


            if ($res->status == 'success') {
                 $link = $res->data->link;
                 $this->insterOrderIntoTable($req,'Completed');
                 return redirect($link);
                }
                if ($res->status == 'cancelled') {
                    return redirect('home');
           }
            else{
                $this->insterOrderIntoTable($req,'Error');
                echo "We can not proccess your payment";
            }
            
            return redirect()->back()->with('alert', 'Success');

    }


    public function proccess(Request $request)
  {

      $status= $request->status;
      $tx_ref= $request->tx_ref;
      $txid= $request->transaction_id;
      if($status == 'cancelled'){
       return redirect('/shop');
     }
     elseif($status == 'failed'){
         echo "Transaction failed";
       }
     elseif($status == 'successful'){
         echo "Transaction successful";
         $curl = curl_init();
         curl_setopt_array($curl, array(
             CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$txid}/verify",
             CURLOPT_RETURNTRANSFER => true,
             CURLOPT_ENCODING => "",
             CURLOPT_MAXREDIRS => 10,
             CURLOPT_TIMEOUT => 0,
             CURLOPT_FOLLOWLOCATION => true,
             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
             CURLOPT_CUSTOMREQUEST => "GET",
             CURLOPT_HTTPHEADER => array(
               "Content-Type: application/json",
               "Authorization: Bearer FLWSECK-35001ee084cc40d5e3695bb1228a0060-X"
             ),
           ));

           $response = curl_exec($curl);

           curl_close($curl);

         $result= json_decode($response);
        //  return $result->data;
         if ($result->data->status == 'successful') {
             Transaction::create([
                'tx_ref' => $result->data->tx_ref,
                'amount' => $result->data->amount,
                'currency' => $result->data->currency,
                'charged_amount' => $result->data->charged_amount,
                'processor_response' => $result->data->processor_response,
                'payment_type' => $result->data->payment_type,
                'phone_number' => $result->data->customer->phone_number,
                'email' => $result->data->customer->email,
                'status' => $result->data->status,
             ]);


         }
         else{
             echo "We could not procces your payment";
             $this->insterOrderIntoTable($request,'Error','Card');
         }

      }
       else{
           echo "There is something wrong with your payment";
       }
  }

  public function insterOrderIntoTable(Request $request, $status)
  {
    $order = Order::create([
        'user_id'=>Auth::check()?Auth::id():null,
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'address'=>$request->address,
        'street'=>$request->street,
        'neighborhood'=>$request->neighborhood,
        'promoter'=>Cookie::has('referredBy')?referencedBy()->id:NULL,
        'discount'=>getDiscount()==0?NULL:getDiscount(),
        'Status'=>$status,
        'total'=>\Cart::getTotal() - getDiscount(),
    ]);
    foreach(\Cart::getContent() as $item){
        $order->items()->create([
            'product_id'=>$item->id,
            'price'=>$item->price,
            'shop'=>1,
            // 'shop'=>$item->model->id,
            'color'=>$item->attributes['color'],
            'size'=>$item->attributes['size'],
            'quantity'=>$item->quantity,
        ]);
    }
    if(Cookie::has('referredBy')){
        referencedBy()->increment('partner_total_sales');
    }

    if(Cookie::has('ref')){
        $user = User::where('affiliate_link',Cookie::get('ref'))->first();
        if ($user) {
            $user->increment('sales');
        }
    }
    // Mail::queue(new CustomerNewOrder($order));
    \Cart::clear();
    if(Session::has('coupon')){
        session()->forget('coupon');
    }
    Session::flash('success','Order placed successfuly!');
  }

}
