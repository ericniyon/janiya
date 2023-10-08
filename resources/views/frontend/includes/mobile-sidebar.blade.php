    <aside class="category-sidebar">
        <div class="category-header">
            <h4 class="category-title"><i class="fas fa-align-left"></i><span>categories</span></h4><button
                class="category-close"><i class="icofont-close"></i></button>
        </div>

        @livewire('frontend.product-category')

    </aside>

    @livewire('frontend.product-cart')


    <aside class="nav-sidebar">
        <div class="nav-header"><a href="#"><img src="{{ asset('front/images/gologo.png') }}"
                    alt="logo"></a><button class="nav-close"><i class="icofont-close"></i></button></div>
        <div class="nav-content">
            <div class="nav-btn"><a href="login.html" class="btn btn-inline"><i class="fa fa-unlock-alt"></i><span>join
                        here</span></a></div>
            <div class="nav-select-group">
                <div class="nav-select"><i class="icofont-world"></i><select class="select">
                        <option value="english" selected>English</option>
                        <option value="bangali">kinyarwanda</option>
                    </select></div>

            </div>


        </div>
    </aside>



    <div class="mobile-menu"><a href="{{ route('home') }}" title="Home Page"><i class="fas fa-home"></i><span>Home</span></a>
     <button
            class="cate-btn" title="Category List"><i class="fas fa-list"></i><span>category</span></button><button
            class="cart-btn" title="Cartlist"><i
                class="fas fa-shopping-basket"></i><span>cartlist</span><sup>9+</sup></button><a href="#"
            title="Wishlist"><i class="fas fa-heart"></i><span>wishlist</span><sup>0</sup></a><a href="#"
            title="Compare List"><i class="fas fa-random"></i><span>compare</span><sup>0</sup></a></div>