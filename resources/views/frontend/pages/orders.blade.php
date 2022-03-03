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
                    @livewire('front.client-orders')
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