@extends('frontend.base')

@section('title')
<title>Shops</title>
@endsection
@push('extra-css')
    @livewireStyles
@endpush
@section('content')


<section class="container">
<div class="full-banner small-banner p-left">
<img src="{{ asset('assets/img/kids.jpg') }}" alt="" class="bg-img blur-up lazyload">
<div class="container">
<div class="row">
<div class="col">
<div class="banner-contain app-detail">
<h3 class="font-fraunces">huge saving</h3>
<h4>special offer</h4>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="section-b-space ratio_asos">
    @include('livewire.front.shop')
</section>


@endsection
@section('scripts')
<script>
    $('#sortBy').change(function() {
        var sort = $("#sortBy").val();
        window.location = "{{ url(''.$route.'') }}?sort="+sort;
    })
</script>
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
