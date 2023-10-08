<header class="header-part">
    <div class="container">
        <div class="header-content">
            <div class="header-media-group"><button class="header-user"><img src="{{ asset('front/images/user.png') }}"
                        alt="user"></button><a href="index.html"><img src="{{ asset('front/images/gologo.png') }}" alt="logo"></a><button
                    class="header-src"><i class="fas fa-search"></i></button></div><a href="index.html"
                class="header-logo"><img src="{{ asset('front/images/gologo.png') }}" alt="logo"></a><a href="login.html"
                class="header-widget" title="My Account"><img src="{{ asset('front/images/user.png') }}" alt="user"><span>join</span></a>
            <form class="header-form"><input type="text" placeholder="Search anything..."><button><i
                        class="fas fa-search"></i></button></form>
            <div class="header-widget-group"><a href="compare.html" class="header-widget" title="Compare List"><i
                        class="fas fa-random"></i><sup>0</sup></a><a href="wishlist.html" class="header-widget"
                    title="Wishlist"><i class="fas fa-heart"></i><sup>0</sup></a><button
                    class="header-widget header-cart" title="Cartlist"><i
                        class="fas fa-shopping-basket"></i><sup>0</sup><span>total
                        price<small>rwf00.00</small></span></button></div>
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
                                href="{{ route('shop') }}">shop</a>
                            
                        </li>
                        <li class="navbar-item dropdown"><a class="navbar-link  " href="{{ route('about') }}">about us</a>
                        
                        </li>
                        
                        
                        <li class="navbar-item"><a class="navbar-link" href="{{ url('/faq') }}">need help</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="{{ route('contact') }}">contact us</a></li>
                    </ul>
                    @if (request()->is('/') || request()->is('shop/products') || request()->is('about') || request()->is('faq') || request()->is('contact') )
                        <div class="navbar-select-group">
                        <div class="navbar-select"><i class="fas fa-flag"></i><select class="select">
                                <option value="english" selected>english</option>
                                <option value="bangali">kinyarwanda</option>
                            </select></div>
                        
                    </div>  
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>
