{{-- <header class="header-tools marketplace">
    <div class="mobile-fix-option"></div>
    <div class="top-header">
        <div class="container-fluid custom-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact">
                        <ul>
                            <li></li>
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
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="brand-logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('assets/img/janiya-logo.jpg')}}" class="img-fluid blur-up lazyloaded" alt="janiya shops" style="height: 3rem"></a>
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
                                        @if (!\Cart::isEmpty())
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
</header> --}}
<header class="header-style-5 color-style" id="sticky-header" style="background: #394868;">
    <div class="mobile-fix-option" bis_skin_checked="1"></div>

    <div class="top-header top-header-theme" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-lg-6" bis_skin_checked="1">
                    <div class="header-contact" bis_skin_checked="1">
                        <ul>
                            <li>Welcome to Our store Janiyashops</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: +(250) 782 779 773</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" bis_skin_checked="1">
                    <div class="header-contact text-end" bis_skin_checked="1">
                        <ul>
                            <li><i class="fa fa-truck" aria-hidden="true"></i>Track Order</li>
                            <li class="pe-0"><i class="fa fa-gift" aria-hidden="true"></i>Gift Cards</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" bis_skin_checked="1">
        <div class="row" bis_skin_checked="1">
            <div class="col-sm-12" bis_skin_checked="1">
                <div class="main-menu" bis_skin_checked="1">
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
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="brand-logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('assets/img/WHITE.png')}}" class="img-fluid blur-up lazyloaded" alt="janiya shops" style="height: 4rem"></a>
                        </div>
                    </div>

                    
                    <div bis_skin_checked="1">
                        <form class="form_search ajax-search the-basics" role="form">
                            <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input
                                    type="search" class="nav-search nav-search-field typeahead tt-hint"
                                    aria-expanded="true" readonly="" autocomplete="off" spellcheck="false"
                                    tabindex="-1" dir="ltr"
                                    style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><input
                                    type="search" placeholder="Search any Device or Gadgets..."
                                    class="nav-search nav-search-field typeahead tt-input" aria-expanded="true"
                                    autocomplete="off" spellcheck="false" dir="auto"
                                    style="position: relative; vertical-align: top; background-color: transparent;">
                                <pre aria-hidden="true"
                                    style="position: absolute; visibility: hidden; white-space: pre; font-family: Lato, sans-serif; font-size: 18px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre>
                                <div class="tt-menu"
                                    style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"
                                    bis_skin_checked="1">
                                    <div class="tt-dataset tt-dataset-states" bis_skin_checked="1"></div>
                                </div>
                            </span>
                            <button type="submit" name="nav-submit-button" class="btn-search">
                                <i class="ti-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="menu-right pull-right" bis_skin_checked="1">
                       
                        <div class="top-header d-block" bis_skin_checked="1">
                            <ul class="header-dropdown">
                                <li class="mobile-wishlist"><a href="#"><img
                                            src="../assets/images/icon/white-icon/heart.png" alt=""> </a></li>
                                <li class="onhover-dropdown mobile-account">
                                    <a href="login.html" bis_skin_checked="1">
                                        <img src="../assets/images/icon/white-icon/user.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div bis_skin_checked="1">
                            <div class="icon-nav" bis_skin_checked="1">
                                <ul>
                                    <li class="onhover-div d-xl-none d-inline-block mobile-search">
                                        <div bis_skin_checked="1"><img src="../assets/images/icon/search.png"
                                                onclick="openSearch()" class="img-fluid blur-up lazyload"
                                                alt=""> <i class="ti-search" onclick="openSearch()"></i>
                                        </div>
                                        <div id="search-overlay" class="search-overlay" bis_skin_checked="1">
                                            <div bis_skin_checked="1"> <span class="closebtn" onclick="closeSearch()"
                                                    title="Close Overlay">×</span>
                                                <div class="overlay-content" bis_skin_checked="1">
                                                    <div class="container" bis_skin_checked="1">
                                                        <div class="row" bis_skin_checked="1">
                                                            <div class="col-xl-12" bis_skin_checked="1">
                                                                <form class="ajax-search">
                                                                    <div class="form-group the-basics"
                                                                        bis_skin_checked="1">
                                                                        <span class="twitter-typeahead"
                                                                            style="position: relative; display: inline-block;"><input
                                                                                type="text"
                                                                                class="form-control typeahead tt-hint"
                                                                                readonly="" autocomplete="off"
                                                                                spellcheck="false" tabindex="-1"
                                                                                dir="ltr"
                                                                                style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box padding-box rgb(255, 255, 255);"><input
                                                                                type="text"
                                                                                class="form-control typeahead tt-input"
                                                                                id="exampleInputPassword1"
                                                                                placeholder="Search a Product"
                                                                                autocomplete="off" spellcheck="false"
                                                                                dir="auto"
                                                                                style="position: relative; vertical-align: top; background-color: transparent;">
                                                                            <pre aria-hidden="true"
                                                                                style="position: absolute; visibility: hidden; white-space: pre; font-family: Lato, sans-serif; font-size: 18px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre>
                                                                            <div class="tt-menu"
                                                                                style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"
                                                                                bis_skin_checked="1">
                                                                                <div class="tt-dataset tt-dataset-states"
                                                                                    bis_skin_checked="1"></div>
                                                                            </div>
                                                                        </span>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary"><i
                                                                            class="fa fa-search"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="onhover-div mobile-setting">
                                        <div bis_skin_checked="1"><img src="../assets/images/icon/setting.png"
                                                class="img-fluid blur-up lazyloaded" alt=""> <i
                                                class="ti-settings"></i></div>
                                        <div class="show-div setting" bis_skin_checked="1">
                                            <h6>language</h6>
                                            <ul>
                                                <li><a href="#">english</a></li>
                                                <li><a href="#">french</a></li>
                                            </ul>
                                            <h6>currency</h6>
                                            <ul class="list-inline">
                                                <li><a href="#">rwf</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    @if (!\Cart::isEmpty())
                                        <span class="cart_qty_cls">{{ \Cart::getContent()->count() }}</span>
                                        @livewire('front.cart-summary')
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-part" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-xl-3" bis_skin_checked="1">
                    <div class="category-menu d-none d-xl-block h-100" bis_skin_checked="1">
                        <div id="toggle-sidebar" class="toggle-sidebar" bis_skin_checked="1">
                            <i class="fa fa-bars sidebar-bar"></i>
                            <h5 class="mb-0">shop by category</h5>
                        </div>
                    </div>
                    <div class="sidenav fixed-sidebar marketplace-sidebar" bis_skin_checked="1"
                        style="display: none;">
                        <nav>
                            <div bis_skin_checked="1">
                                <div class="sidebar-back text-start d-xl-none d-block" bis_skin_checked="1"><i
                                        class="fa fa-angle-left pe-2" aria-hidden="true"></i> Back</div>
                            </div>
                            <ul id="sub-menu" class="sm pixelstrap sm-vertical hover-unset"
                                data-smartmenus-id="16993054726580774">
                                <li> <a href="#" class="has-submenu" id="sm-16993054726580774-1"
                                        aria-haspopup="true" aria-controls="sm-16993054726580774-2"
                                        aria-expanded="false">TV &amp; Audio</a>

                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-9 position-unset" bis_skin_checked="1">
                    <div class="main-nav-center" bis_skin_checked="1">
                        <nav class="text-start">
                            <!-- Sample menu definition -->
                            <ul id="main-menu" class="sm pixelstrap sm-horizontal hover-unset"
                                data-smartmenus-id="1699305472652929">
                                <li>
                                    <div class="mobile-back text-end" bis_skin_checked="1">Back<i
                                            class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>
                                <li><a href="{{ route('home') }}" bis_skin_checked="1">Home</a></li>

                                <li>
                                    <a href="{{ route('shops.list') }}" class="has-submenu"
                                        id="sm-1699305472652929-3" aria-haspopup="true"
                                        aria-controls="sm-1699305472652929-4" aria-expanded="false">shop</a>

                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="has-submenu" id="sm-1699305472652929-5"
                                        aria-haspopup="true" aria-controls="sm-1699305472652929-6"
                                        aria-expanded="false">about us</a>

                                </li>
                                <li><a href="{{ route('contact') }}" class="has-submenu" id="sm-1699305472652929-13"
                                        aria-haspopup="true" aria-controls="sm-1699305472652929-14"
                                        aria-expanded="false">constct us</a>

                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-xxl-3 d-none d-xxl-inline-block" bis_skin_checked="1">
                    <div class="header-options" bis_skin_checked="1">
                        <div class="vertical-slider no-arrow slick-initialized slick-slider slick-vertical"
                            bis_skin_checked="1">
                            <div class=" " style="height: 26px;margin-top:1rem" bis_skin_checked="1">
                                <div class=""
                                    style="opacity: 1; height: 182px; transform: translate3d(0px, -7px, 0px); transition: transform 500ms ease 0s;"
                                    bis_skin_checked="1">
                                    
                                    
                                    <div class="slick-slide slick-active" data-slick-index="1"
                                        aria-hidden="false" style="width: 326px;" bis_skin_checked="1"
                                        tabindex="-1">
                                        <div bis_skin_checked="1">
                                            <div style="width: 100%; display: inline-block;" bis_skin_checked="1">
                                                <a href="{{ route('become.vendor') }}">
                                                    <span><i class="ti-announcement" aria-hidden="true"></i>How to become affiliate</span>
                                                </a>
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
    </div>
</header>
