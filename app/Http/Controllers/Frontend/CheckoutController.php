<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {
        return view('frontend.pages.checkout');
    }


    public function payment(Request $request)
    {
        $amount = 100;
        $request = [
            'tx_ref' => time(),
            'amount' => $amount,
            'currency' => 'RWF',
            'style' => [
                'color' => 'blue'
            ],
            'payment_options' => 'card',
            'redirect_url' => 'http://localhost:8000/proccesspayment',
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
                return redirect($link);
            }
            if ($res->status == 'cancelled') {
                return redirect('home');
           }
            else{

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


       return redirect('/');
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
         }

      }
       else{
           echo "There is something wrong with your payment";
       }
  }



}
