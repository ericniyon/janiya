@extends('frontend.base')


@section('title')
<title>{{config('app.name')}} | Dashboard</title>

@endsection

@section('content')
<section class="section-b-space">
    <div class="container">
        <div class="row">
            @include('frontend.includes.sidenav')
            <div class="col-lg-9">
                <div class="dashboard-right">
                    <div class="dashboard">
                        <div class="page-title d-flex justify-content-between">
                            <h2>{{$order->orderNo}}</h2>
                        </div>
                        <div class="welcome-msg table-responsive">
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Unit Price</th>
                                        <th>Size</th>
                                        <th>Color</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order->items as $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <img src="{{asset(Storage::url($item->product->product->thumb->image))}}" 
                                                height="40" width="40" class="rounded" alt="">
                                                <span class="mx-1"></span>
                                                <div class="d-flex flex-column">
                                                    <span>{{$item->product->name}}</span>
                                                    <span><strong>Shop: &nbsp;&nbsp;</strong>{{$item->shopName->shop_name}}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->size}}</td>
                                        <td>{{$item->color}}</td>
                                        <td>{{$item->quantity}}</td>
                                        <td>{{$item->price * $item->quantity}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('name')
    <script>
        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
        }
    </script>
@endsection