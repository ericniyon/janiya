@extends('frontend.base')

@section('title')
<title>Product Shop</title>
@endsection
@section('content')
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>our Shops</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{config('app.name')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shpos</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="collection section-b-space ratio_square ">
    <div class="container">
        <div class="row partition-collection">
            @forelse ($shops as $vendor)
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="collection-block">
                    <div>
                        <img src="{{asset($vendor->profile?Storage::url($vendor->profile):'assets/images/default-shop.jpg')}}" 
                        class="img-fluid blur-up lazyload bg-img" 
                        alt="{{$vendor->shop_name}}">
                    </div>
                    <div class="collection-content">
                        <h4>({{$vendor->boughtProducts()->count()}} products)</h4>
                        <h3>{{$vendor->shop_name}}</h3>
                        <p>{{str()->limit($vendor->details,100,'...')}}</p>
                        <a href="{{route('shops.list.single',[$vendor->slug])}}" class="btn btn-outline"
                            >View Shop!</a>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
        </div>
    </div>
</section>
@endsection