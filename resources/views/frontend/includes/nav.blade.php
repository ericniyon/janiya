<header class="header-tools marketplace">
    <div class="mobile-fix-option"></div>
    <div class="top-header">
        <div class="container-fluid custom-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact">
                        <ul>
                            <li>Welcome to Our store Janiya shops</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: +(250) 782 779 773</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 text-end">
                    <ul class="header-dropdown">
                        <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        </li>
                        <li class="onhover-dropdown mobile-account"> <i class="fa fa-user text-light" style="" aria-hidden="true"></i>
                            My Account
                            <ul class="onhover-show-div">
                                @guest
                                <li><a href="/login">Login</a></li>
                                <li><a href="/register">register</a></li>
                                @else
                                <li><a href="/dashboard">Dashboard</a></li>
                                @if (is_null(Auth::user()->affiliate_link))
                                <li><a href="/register">Become Affiates</a></li>
                                @endif
                                @endguest
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu">
                    <div class="menu-left">
                        <div class="navbar">
                            <a href="javascript:void(0)" onclick="openNav()">
                                <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                </div>
                            </a>
                            <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                <nav class="">
                                    <div onclick="closeNav()">
                                        <div class="sidebar-back text-start"><i class="fa fa-angle-left pe-2" aria-hidden="true"></i> Back</div>
                                    </div>
                                    <ul id="sub-menu" class="sm pixelstrap sm-vertical" data-smartmenus-id="16467250628323677">
                                    @foreach (App\Models\ProductCategory::all() as $category)
                                        <li><a href="{{ route('categories-products', Crypt::encryptString($category->id)) }}">{{ $category->category_name }}</a></li>
                                    @endforeach


                                        {{-- <li><a href="#">kid's fashion</a></li>

                                        <li><a href="#">home &amp; decor</a></li>
                                        <li><a href="#">Unisex</a></li> --}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="brand-logo">
                            <a href="index.html"><img src="{{asset('assets/img/janiya-logo.jpg')}}" class="img-fluid blur-up lazyloaded" alt=""></a>
                        </div>
                    </div>
                    <div class="menu-right pull-right">
                        <div>
                            <nav id="main-nav">
                                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                    <li>
                                        <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2"
                                                aria-hidden="true"></i></div>
                                    </li>

                                    <li><a href="{{route('home')}}">Home</a></li>

                                    <li>
                                        <a href="{{route('shops.list')}}">shops</a>

                                    </li>
                                    {{-- <li>
                                        <a href="{{route('shop')}}">products</a>

                                    </li> --}}
                                    <li>
                                        <a href="{{route('about')}}">about</a>

                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">contact</a>

                                    </li>


                                </ul>
                            </nav>
                        </div>
                        <div>
                            <div class="icon-nav">
                                <ul>
                                    <li class="onhover-div mobile-search">
                                        <div><img src="../assets/images/icon/search.png" onclick="openSearch()" class="img-fluid blur-up lazyloaded" alt=""> <i class="ti-search" onclick="openSearch()"></i></div>
                                        <div id="search-overlay" class="search-overlay">
                                            <div> <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                                <div class="overlay-content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <form>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="onhover-div mobile-cart">
                                        <div>
                                            <img src="../assets/images/icon/cart.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                            <i class="ti-shopping-cart"></i>
                                        </div>
                                        @if(!\Cart::isEmpty())
                                        <span class="cart_qty_cls">{{ \Cart::getContent()->count() }}</span>
                                        @livewire('front.cart-summary')
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
