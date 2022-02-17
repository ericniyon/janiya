<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function process(Request $request){

        $status= $request->status;
        $tx_ref= $request->tx_ref;
        $txid= $request->transaction_id;

        if($status == 'cancelled'){
          return view('home');
       }
       elseif($status == 'failed'){
           echo "Transaction failed";
         }
         elseif($status == 'successful'){
           //echo "Transaction successful";
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
           if ($result->status == 'success') {

                $amountPaid= $result->data->charged_amount;
                $currency = $result->data->currency;
                $payment_method = $result->data->payment_type;

                // $contact_name = session()->get('contact_name');
                // $deriver = session()->get('deriver');
                // $phone = session()->get('phone');


                echo "Thank for paying";

         }
         else{
             echo "There is something wrong with your payment";
         }
       }
    }
}
