@extends('frontend.base')
@push('extraCss')
    <link rel="stylesheet" href="{{ asset('front/css/brand-list.css') }}">
@endpush
@section('title')
<title>Shops</title>
@endsection
@push('extra-css')
    @livewireStyles
@endpush
@section('content')
<section class="inner-section single-banner" 
style="background: url({{ asset('front/images/single-banner.jpg') }}) no-repeat center;">
   <div class="container">
      <h2>brand list</h2>
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="/">Home</a></li>
         <li class="breadcrumb-item active" aria-current="page">Shop List</li>
      </ol>
   </div>
</section>
<section class="section newitem-part">
   <div class="container">
       <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-center">
           @forelse ($shops as $vendor)
           <div class="col">
               <div class="category-wrap">
                   <div class="category-media">
                       <img src="{{asset($vendor->profile_image)}}" alt="{{ $vendor->shop_name }}">
                       <div class="category-overlay">
                           <a href="{{ route('vendors.products.show', $vendor->slug) }}"><i class="fas fa-link"></i></a>
                       </div>
                   </div>
                   <div class="category-meta">
                       <h4>{{ $vendor->shop_name }}</h4><p>({{ $vendor->products_count }} items)</p>
                   </div>
               </div>
           </div>
           @empty
           @endforelse
       </div>
       <div class="row">
           {{ $shops->links() }}
       </div>
   </div>
</section>


@endsection
@section('scripts')

<script>
    function loadingData(page) {
        $.ajax({
            url: '?page='+page,
            type: 'get',
            beforeSend:function(){
                $('.ajax-load').show()
            }
        })
        .done(function(data){
            if(data.html == ''){
                $('ajax-load').html('No more products available')
                return;
            }
            $('ajax-load').hide()
            $('product-data').append(data.html)

        })
        .fail(function(){
            alert('Something went wrong')
        })
    }

    var page = 1;
    $(window).scroll(function(){
        if($(winow).scrollTop() + $(window).height()+120>=$(document).height()){
            page++;
            loadingData(page)
        }
    })
</script>
@endsection
