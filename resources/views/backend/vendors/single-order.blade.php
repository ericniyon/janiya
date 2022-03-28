@extends('backend.vendor_base')
@section('title')
<title>My Store</title>
@endsection
@section('content')

<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Dashboard
                        <small>{{config('app.name')}}</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{route('vendor.dashboard')}}">
                        <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Orders</li>
                    <li class="breadcrumb-item active">{{$order->orderNo}}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5>{{$order->orderNo}}</h5>
                    </div>
                    <div class="card-body mt-1 pt-1">
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
                                @foreach($items as $item)
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <img src=""
                                            height="40" width="40" class="rounded" alt="">
                                            <span class="mx-1"></span>
                                            <div class="d-flex flex-column">
                                                <span></span>
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
@endsection
