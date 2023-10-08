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
@livewire('frontend.shops')



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
