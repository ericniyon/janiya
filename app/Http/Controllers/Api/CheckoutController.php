<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\CustomerNewOrder;
use App\Models\Order;
use App\Models\Transaction;
use App\Models\User;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Validator;

class CheckoutController extends Controller
{

    /**
     * @OA\Post(
     *      path="/api/payment",
     *      operationId="payment",
     *      tags={"checkOut"},
     *      summary="Start payment",
     *      description="checkout cart by paying your order",
     *      @OA\Parameter(
     *          name="name",
     *          description="name of client or person who is incharge of payment",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *       ),
     *      @OA\Parameter(
     *          name="email",
     *          description="email of client",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *       ),
     *      @OA\Parameter(
     *          name="address",
     *          description="address of client",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *       ),
     *      @OA\Parameter(
     *          name="street",
     *          description="street where client located",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *       ),
     *      @OA\Parameter(
     *          name="neighborhood",
     *          description="neighborhood of client",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *       ),
     *      @OA\Response(
     *          response=204,
     *          description="Successful operation",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad user Input",
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     *
     * )
     */
    public function payment(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'name'=>'required|string|min:3|max:120',
            'email'=>'email|string|required|min:5|max:120',
            'phone'=>"required_without:email|sometimes|string|size:10|starts_with:078,079,072,073",
            'address'=>'required|string|min:3|max:255',
            'street'=>'required|string|min:3|max:100',
            'neighborhood'=>'required|string|min:3|max:120',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $amount = \Cart::getTotal() - getDiscount();
        $request = [
            'tx_ref' => time(),
            'amount' => $amount,
            'currency' => 'RWF',
            'style' => [
                'color' => 'blue'
            ],
            'payment_options' => 'mobilemoneyrwanda',
            'redirect_url' => config('app.url').':8000/proccesspayment',
            'customer' => [
                'email' => $req->email,

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
            $curl= \curl_init();
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
                'Authorization: Bearer FLWSECK_TEST-c0bc8c6efd1cf2c59950dd6cae04e46f-X',
                'Content-Type: application/json'
            ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);

            $res= json_decode($response, true);
            $result = $res['status'];
            if ($result=="success") {
                 $this->insterOrderIntoTable($req,'Completed');
                 return response()->json($res);
            }
            if ($result=="cancelled") {
                return response()->json("cancelled");
            }
            else {
                $this->insterOrderIntoTable($req,'Error');
                return response()->json("error");
            }
    }

    /**
     * @OA\Post(
     *      path="/api/paymentProcess",
     *      operationId="paymentProcess",
     *      tags={"checkOut"},
     *      summary="process payment",
     *      description="this ids final stage for payment i.e like decision",
     *      @OA\Parameter(
     *          name="status",
     *          description="status of payment if success, fails, or cancelled",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *       ),
     *      @OA\Parameter(
     *          name="tx_ref",
     *          description="transaction refference must be unique for each transaction",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *       ),
     *      @OA\Parameter(
     *          name="transaction_id",
     *          description="id of transaction",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *       ),
     *      @OA\Response(
     *          response=204,
     *          description="Successful operation",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad user Input",
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     *
     * )
     */
    public function proccess(Request $request)
    {

        $status= $request->status;
        $tx_ref= $request->tx_ref;
        $txid= $request->transaction_id;
        if($status == 'cancelled'){
            return response()->json(['status'=>'success','message'=>'Payment Process cancelled'], 200);
        }
        elseif($status == 'failed'){
                    return response()->json(['status'=>'success','message'=>'Transaction failed'], 200);
        }
        elseif($status == 'successful'){
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
                "Authorization: Bearer FLWSECK_TEST-c0bc8c6efd1cf2c59950dd6cae04e46f-X"
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            $result= json_decode($response);
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
                return response()->json($result);


            }else{
                $this->insterOrderIntoTable($request,'Error','Card');
                return response()->json(['status'=>'success', 'message'=>'We could not procces your payment']);
            }

        }
        else{
            return response()->json(['status' =>'fail', 'message'=> 'There is something wrong with your payment']);
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

            'shop'=>$item->attributes['shop'],
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
  }
}
