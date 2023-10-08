<div class="col-lg-3">
    <div class="account-sidebar"><a class="popup-btn">my account</a></div>
    <div class="dashboard-left">
        <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left"
                    aria-hidden="true"></i> back</span></div>
        <div class="block-content">
            <ul>
                <li class="active"><a href="{{url('/dashboard')}}">Account Info</a></li>
                <li><a href="{{route('cliet.orders')}}">My Orders</a></li>
                <li><a href="#">My Wishlist</a></li>
                <li><a href="{{route('profile')}}">My Profile</a></li>
                @if (auth()->user()->promo_code)
                <li><a href="#">Withdraw</a></li>
                <li><a href="#">history</a></li>
                @endif
                <li><a href="{{route('profile.password')}}">Change Password</a></li>
                <li class="last">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Log Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>