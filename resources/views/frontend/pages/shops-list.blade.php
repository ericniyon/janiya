@extends('frontend.base')

@section('title')
<title>Shops</title>
@endsection
@push('extra-css')
    @livewireStyles
@endpush
@section('content')

<div class="breadcrumb-section" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-sm-6" bis_skin_checked="1">
                    <div class="page-title" bis_skin_checked="1">
                        <h2>collection</h2>
                    </div>
                </div>
                <div class="col-sm-6" bis_skin_checked="1">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">shops</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>



 <section class="section-b-space ratio_portrait">
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col" bis_skin_checked="1">
                    <div class="slide-4 category-m no-arrow slick-initialized slick-slider" bis_skin_checked="1"><button
                            class="slick-prev slick-arrow" aria-label="Previous" type="button" aria-disabled="false"
                            style="display: inline-block;">Previous</button>
                        <div class="slick-list draggable" bis_skin_checked="1">
                            <div class="slick-track"
                                style="opacity: 1; width: 1745px; "
                                bis_skin_checked="1">
                                
                                @include('frontend.partials.__shops')
                                
                                
                                
                                
                            </div>
                        </div><button class="slick-next slick-arrow slick-disabled" aria-label="Next" type="button"
                            style="display: inline-block;" aria-disabled="true">Next</button>
                    </div>
                </div>
            </div>
        </div>
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
