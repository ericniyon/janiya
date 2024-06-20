@extends('frontend.base_shop')

@section('title')
    <title>{{ $vendor->shop_name }}</title>
@endsection

@section('content')
   <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <div class="header-top-welcome">
                        <p>Welcome to Ecomart in Your Dream Online Store!</p>
                    </div>
                </div>
                <div class="col-md-5 col-lg-3">
                    <div class="header-top-select">
                        <div class="header-select"><i class="icofont-world"></i><select class="select">
                                <option value="english" selected>english</option>
                                <option value="bangali">kinyarwanda</option>
                                <option value="arabic">arabic</option>
                            </select></div>
                        
                    </div>
                </div>
                <div class="col-md-7 col-lg-4">
                    <ul class="header-top-list">
                        <li><a href="#">offers</a></li>
                        <li><a href="{{ url('faq') }}">need help</a></li>
                        <li><a href="{{ url('contact') }}">contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
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
                    <a href="/" class="header-logo"><img src="{{ asset('front/images/gologo.png') }}"
                            alt="logo"></a>
                    <a href="{{ route('login') }}" class="header-widget" title="My Account">
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



                                @include('frontend.partial.__shop')
                                @include('frontend.partial.__categories')

                                <li class="navbar-item dropdown"><a class="navbar-link  " href="{{ route('about') }}">about
                                        us</a>

                                </li>


                                <li class="navbar-item"><a class="navbar-link" href="{{ url('/faq') }}">need help</a></li>
                                <li class="navbar-item"><a class="navbar-link" href="{{ route('contact') }}">contact us</a>
                                </li>
                            </ul>



                            <div class="navbar-info-group" bis_skin_checked="1">
                                <div class="navbar-info" bis_skin_checked="1"><i class="icofont-ui-touch-phone"></i>
                                    <p><small>call us</small><span>{{ $vendor->phone }}</span></p>
                                </div>
                                <div class="navbar-info" bis_skin_checked="1"><i class="icofont-ui-email"></i>
                                    <p><small>email us</small><span>{{ $vendor->email }}</span></p>
                                </div>
                            </div>


                            @if (request()->is('/') ||
                                    request()->is('shop/products') ||
                                    request()->is('about') ||
                                    request()->is('faq') ||
                                    request()->is('contact'))
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
        @if (!\Cart::isEmpty())
            <aside class="cart-sidebar">
                <div class="cart-header">
                    <div class="cart-total"><i class="fas fa-shopping-basket"></i><span>total item
                            ({{ !\Cart::isEmpty() ? \Cart::getContent()->count() : 0 }})</span></div>
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
                        <span class="checkout-price"
                            style="width: 65%!important">{{ !\Cart::isEmpty() ? money(\Cart::getSubTotal()) : 'Rwf00.00' }}</span>
                    </a>
                </div>
            </aside>
        @endif
   


    <section class="home-classic-slider slider-arrow">
      <div
        class="banner-part"
        style="background: url(images/home/classic/01.jpg) no-repeat center"
      >
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-lg-6">
              <div class="banner-content">
                <h1>we are delivered organic fresh fruits.</h1>
                <p>
                  Lorem ipsum dolor consectetur adipisicing elit modi
                  consequatur eaque expedita porro necessitatibus eveniet
                  voluptatum quis pariatur Laboriosam molestiae architecto
                  excepturi
                </p>
                <div class="banner-btn">
                  <a class="btn btn-inline" href="shop-4column.html"
                    ><i class="fas fa-shopping-basket"></i
                    ><span>shop now</span></a
                  ><a class="btn btn-outline" href="offer.html"
                    ><i class="icofont-sale-discount"></i
                    ><span>get offer</span></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="banner-part"
        style="background: url(images/home/classic/02.jpg) no-repeat center"
      >
        <div class="container">
          <div class="row">
            <div class="col-md-11 col-lg-7 mx-auto">
              <div class="banner-content text-center">
                <h1>enjoy your healthy life with our fresh vegetables.</h1>
                <p>
                  Lorem ipsum dolor consectetur adipisicing elit modi
                  consequatur eaque expedita porro necessitatibus eveniet
                  voluptatum quis pariatur Laboriosam molestiae architecto
                  excepturi
                </p>
                <div class="banner-btn">
                  <a class="btn btn-inline" href="shop-4column.html"
                    ><i class="fas fa-shopping-basket"></i
                    ><span>shop now</span></a
                  ><a class="btn btn-outline" href="offer.html"
                    ><i class="icofont-sale-discount"></i
                    ><span>get offer</span></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="banner-part"
        style="background: url(images/home/classic/03.jpg) no-repeat center"
      >
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-lg-6"></div>
            <div class="col-md-8 col-lg-6">
              <div class="banner-content">
                <h1>get your organic food with our dairy items.</h1>
                <p>
                  Lorem ipsum dolor consectetur adipisicing elit modi
                  consequatur eaque expedita porro necessitatibus eveniet
                  voluptatum quis pariatur Laboriosam molestiae architecto
                  excepturi
                </p>
                <div class="banner-btn">
                  <a class="btn btn-inline" href="shop-4column.html"
                    ><i class="fas fa-shopping-basket"></i
                    ><span>shop now</span></a
                  ><a class="btn btn-outline" href="offer.html"
                    ><i class="icofont-sale-discount"></i
                    ><span>get offer</span></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    






    @livewire('front.single-shop', ['vendor' => $vendor], key($vendor->id))
@endsection
