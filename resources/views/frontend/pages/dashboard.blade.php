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
                        <div class="page-title">
                            <h2>My Dashboard</h2>
                        </div>
                        <div class="welcome-msg">
                            <p>Hello, {{Auth::user()->name}} !</p>
                            <p>From your My Account Dashboard you have the ability to view a snapshot of your recent
                                account activity and update your account information. Select a link below to view or
                                edit information.</p>
                        </div>
                        <div class="box-account box-info">
                            <div class="box-head">
                                <h2>Account Information</h2>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    @if (is_null(Auth::user()->promo_code))
                                    <div class="box">
                                        <div class="box-title">
                                            <h3>Affiliation Information</h3>
                                            @if (is_null(Auth::user()->affiliate_link))
                                            <a href="{{route('affiliate')}}" 
                                            onclick="event.preventDefault();
                                            document.getElementById('affiliateForm').submit();"
                                            >Become affiliate</a>
                                            <form id="affiliateForm" action="{{ route('affiliate') }}" 
                                            method="POST" class="d-none">
                                                @method('PUT')
                                                @csrf
                                            </form>
                                            @endif
                                        </div>
                                        <div class="box-content">
                                            @if (is_null(Auth::user()->affiliate_link))
                                            <address>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, praesentium.</address>
                                            @else
                                            <h6>Referral LINK: {{config('app.url').__('/shop?ref=').Auth::user()->affiliate_link}}
                                            </h6>
                                            <h6>Total Click: {{Auth::user()->clicks}}</h6>
                                            <h6>Total Sales: {{Auth::user()->sales}}</h6>
                                            <h6>Remaining sales to become {{config('app.name')}} 
                                                partner: <b>{{50 - Auth::user()->sales}}</b></h6>
                                            @endif
                                        </div>
                                    </div>
                                    @else
                                    <div class="box">
                                        <div class="box-title">
                                            <h3>Partnership Information</h3>
                                            <a href="#">Read our terms & condition</a>
                                        </div>
                                        <div class="box-content">
                                            <h6>Promo Code: <strong>{{Auth::user()->promo_code}}</strong>
                                            </h6>
                                            <h6>Category/Level: <strong>{{Auth::user()->commission->name}}</strong></h6>
                                            <h6>Total Sales: {{Auth::user()->sales}}</h6>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="box">
                                        <div class="box-title">
                                            <h3>Contact Information</h3><a href="#">Edit</a>
                                        </div>
                                        <div class="box-content">
                                            <h6>{{Auth::user()->name}}</h6>
                                            <h6>{{Auth::user()->email}}</h6>
                                            <h6>{{Auth::user()->phone}}</h6>
                                            <h6><a href="#">Change Password</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="box">
                                    <div class="box-title">
                                        <h3>Address Book</h3><a href="#">Manage Addresses</a>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h6>Default Billing Address</h6>
                                            <address>You have not set a default billing address.<br><a href="#">Edit
                                                    Address</a></address>
                                        </div>
                                    </div>
                                </div>
                            </div>
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