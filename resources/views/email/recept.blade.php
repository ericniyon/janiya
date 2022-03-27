<style>
    body {
  font-family: Helvetica, sans-serif;
  font-size: 13px;
}
.container {
  max-width: 680px;
  margin: 0 auto;
}
.logotype {
  background: #000;
  color: #fff;
  width: 75px;
  height: 75px;
  line-height: 75px;
  text-align: center;
  font-size: 11px;
}
.column-title {
  background: #eee;
  text-transform: uppercase;
  padding: 15px 5px 15px 15px;
  font-size: 11px;
}
.column-detail {
  border-top: 1px solid #eee;
  border-bottom: 1px solid #eee;
}
.column-header {
  background: #eee;
  text-transform: uppercase;
  padding: 15px;
  font-size: 11px;
  border-right: 1px solid #eee;
}
.row {
  padding: 7px 14px;
  border-left: 1px solid #eee;
  border-right: 1px solid #eee;
  border-bottom: 1px solid #eee;
}
.alert {
  background: #670A25;
  padding: 20px;
  margin: 20px 0;
  line-height: 22px;
  color: #333;
}
.socialmedia {
  background: #eee;
  padding: 20px;
  display: inline-block;
}

</style>

<div class="container">
{{-- @php
    $status = '';
    $orderNo = 0
@endphp

@foreach ( $store->orders as $item)
@php
    // $status = $item->status
    $orderNo = $item->orderNo
@endphp
@php
    $status = $item->status
    // $orderNo = $item->orderNo
@endphp
@endforeach --}}
  <table width="100%">
    <tr>
      <td width="75px">
          <img src="https://janiyashops.rw/assets/img/janiya-logo.jpg" alt="" srcset="">
      </td>
      <td width="300px"><div style="background: #670A25;border-left: 15px solid #fff;padding-left: 30px;font-size: 26px;font-weight: bold;letter-spacing: -1px;height: 73px;line-height: 75px; color:#fff">Invoice</div></td>
      <td></td>
    </tr>
  </table>
  <br><br>
  <h3>  @if ($shop->payment_confirmed == 1)
    <h2 style="color: green">Confimed</h2>
  @else

  @endif</h3>
  {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> --}}
  <br>
  <table width="100%" style="border-collapse: collapse;">
    <tr>
      <td widdth="50%" style="background:#eee;padding:20px;">
        <strong>Date:</strong> {{ $shop->created_at }}<br>
        <strong>shop Name:</strong> {{ $shop->name }}<br>
        <strong>Shop Name:</strong> {{ $shop->shop_name }}<br>
      </td>
       <br><br>
      <td style="background:#eee;padding:20px;">
        <strong>Order-nr:</strong> {{ $shop->orderNo }}<br>
        <strong>E-mail:</strong> {{ $shop->email }}<br>
        <strong>Phone:</strong> {{ $shop->phone }}<br>
      </td>
    </tr>
  </table><br>
  <br>
  <table width="100%" style="border-top:1px solid #eee;border-bottom:1px solid #eee;padding:0 0 8px 0">
    {{-- <tr>
      <td><h3>Checkout details</h3>Your checkout made by VISA Card **** **** **** 2478<td>
    </tr> --}}
  </table><br>
  <div style="background: #670A25 url(https://cdn4.iconfinder.com/data/icons/basic-ui-2-line/32/shopping-cart-shop-drop-trolly-128.png) no-repeat;width: 50px;height: 50px;margin-right: 10px;background-position: center;background-size: 25px;float: left; margin-bottom: 15px; color:#fff"></div>
  <h3>Detailed Order</h3>

   <table width="100%" style="border-collapse: collapse;border-bottom:1px solid #eee;">
    @php
        $totals = 0
    @endphp
     <tr>
       <td width="40%" class="column-header">Product Name</td>
       <td width="20%" class="column-header">Product Valuations</td>
       <td width="20%" class="column-header">P. Q</td>
       <td width="20%" class="column-header">Total</td>
     </tr>
     {{-- {{ $shop }} --}}
     @foreach ($shop->store->valiations as $item)
     <tr>
       <td class="row"><span style="color:#777;font-size:11px;"></span><br>{{ $item->product->product->name }}</td>
       <td class="row">{{ $item->color }} | {{ $item->size }}</td>
       <td class="row">{{ $item->product->product->factory_price }}Rwf <span style="color:#777">X</span> {{ $item->quantity }} </td>
       <td class="row" id="loop">{{ $item->product->product->factory_price * $item->quantity }} Rwf</td>
     </tr>
     @php

         $totals = $totals + $item->product->product->factory_price * $item->quantity
     @endphp
     @endforeach
  </table><br>
  <table width="100%" style="background:#eee;padding:20px;">
    <tr>
      <td>
        <table width="300px" style="float:right">
          <tr>
            <td><strong>Sub-total:

            </strong></td>
            <td style="text-align:right">{{ $totals }}</td>

          </tr>
          {{-- <tr>
            <td><strong>Shipping fee :</strong></td>
            <td style="text-align:right">2000Rwf</td>

          </tr> --}}
          <tr>
            <td><strong>Tax 0.00Rwf:</strong></td>
            <td style="text-align:right">0.00Rwf</td>

          </tr>
          <tr>
            <td><strong>Grand total:</strong></td>
            <td style="text-align:right" id="total">{{ $totals + 2000 }}Rwf</td>
          </tr>
        </table>
       </td>
    </tr>
  </table>
  <div class="alert text-center" style="color: #fff; text-align: center">Authorised By Janiya Shops @janiyashops</div>
  {{-- <div class="socialmedia">Follow us online <small>@janiyashops</small></div> --}}
</div><!-- container -->
    <script type="text/javascript">
    $(function() {

       var TotalValue = 0;

       $("tr #loop").each(function(index,value){
         currentRow = parseFloat($(this).text());
         TotalValue += currentRow
       });

       document.getElementById('total').innerHTML = TotalValue;


});
</script>
