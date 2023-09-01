<header class="header-part">
    <div class="container">
        <div class="header-content">
            <div class="header-media-group">
                <button class="header-user">
                    <img src="{{ asset('front/images/user.png') }}" alt="user">
                </button>
                <a href="/">
                    <img src="{{ asset('front/images/gologo.png') }}" alt="logo">
                </a>
                <button class="header-src"><i class="fas fa-search"></i></button>
            </div>
            <a href="/" class="header-logo"><img src="{{ asset('front/images/gologo.png') }}" alt="logo"></a>
            <a href="login.html" class="header-widget" title="My Account">
                <img src="{{ asset('front/images/user.png') }}" alt="user">
                <span>join</span>
            </a>
            <form class="header-form">
                <input type="text" placeholder="Search anything...">
                <button><i class="fas fa-search"></i></button>
            </form>
            @livewire('front.top-cart')
        </div>
    </div>
</header>
<nav class="navbar-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navbar-content">
                    <ul class="navbar-list">
                        <li class="navbar-item "><a class="navbar-link" href="{{ route('home') }}">home</a>
                            
                        </li>
                        <li class="navbar-item"><a class="navbar-link"
                                href="{{ route('shop') }}">All Products</a>
                            
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link"href="{{ route('shops.list') }}">Shops List</a>
                        </li>   
                        <li class="navbar-item dropdown"><a class="navbar-link  " href="{{ route('about') }}">about us</a>
                        
                        </li>
                        
                        
                        <li class="navbar-item"><a class="navbar-link" href="{{ url('/faq') }}">need help</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="{{ route('contact') }}">contact us</a></li>
                    </ul>
                    <div class="navbar-select-group">
                        <div class="navbar-select"><i class="fas fa-flag"></i><select class="select">
                                <option value="english" selected>english</option>
                                <option value="bangali">kinyarwanda</option>
                            </select></div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
@if(!\Cart::isEmpty())
<aside class="cart-sidebar">
    <div class="cart-header">
       <div class="cart-total"><i class="fas fa-shopping-basket"></i><span>total item ({{ !\Cart::isEmpty() ? \Cart::getContent()->count() : 0 }})</span></div>
       <button class="cart-close"><i class="icofont-close"></i></button>
    </div>
    @livewire('front.aside-cart-summary')
    <div class="cart-footer">
       <button class="coupon-btn">Do you have a coupon code?</button>
       <form class="coupon-form">
            <input type="text" placeholder="Enter your coupon code">
            <button type="submit"><span>apply</span></button>
        </form>
       <a class="cart-checkout-btn" href="{{ route('cart') }}">
            <span class="checkout-label" style="width: 35%!important">View Cart</span>
            <span class="checkout-price" style="width: 65%!important">{{ !\Cart::isEmpty() ? money(\Cart::getSubTotal()) : 'Rwf00.00' }}</span>
        </a>
    </div>
 </aside>
@endif