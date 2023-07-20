@extends('frontend.base')

@section('title')
<title>{{$vendor->shop_name}}</title>
@endsection
@section('content')
<section class="inner-section single-banner"
        style="background: url({{ asset($vendor->cover_image) }}) no-repeat center;">
        <div class="container">
            <h2>{{ $vendor->shop_name }} </h2>
            <p>{{$vendor->details}}</p>
        </div>
</section>
<!-- breadcrumb end -->
<!-- section start -->
@livewire('front.single-shop', ['vendor' => $vendor], key($vendor->id))
@endsection
