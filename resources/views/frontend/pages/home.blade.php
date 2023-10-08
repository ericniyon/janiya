@extends('frontend.base')
@section('title')
<title>Go-Green | Shop</title>
@endsection


@push('extra-css')
    @livewireStyles
@endpush
@section('content')


<aside class="category-sidebar">
        <div class="category-header">
            <h4 class="category-title"><i class="fas fa-align-left"></i><span>categories</span></h4><button
                class="category-close"><i class="icofont-close"></i></button>
        </div>
        <ul class="category-list">
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-vegetable"></i><span>vegetables</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">asparagus</a></li>
                    <li><a href="#">broccoli</a></li>
                    <li><a href="#">carrot</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-groceries"></i><span>groceries</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Grains & Bread</a></li>
                    <li><a href="#">Dairy & Eggs</a></li>
                    <li><a href="#">Oil & Fat</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-fruit"></i><span>fruits</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Orange</a></li>
                    <li><a href="#">Strawberry</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-dairy-products"></i><span>dairy farm</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Egg</a></li>
                    <li><a href="#">milk</a></li>
                    <li><a href="#">butter</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-crab"></i><span>sea foods</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Lobster</a></li>
                    <li><a href="#">Octopus</a></li>
                    <li><a href="#">Shrimp</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-salad"></i><span>diet foods</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Salmon</a></li>
                    <li><a href="#">Potatoes</a></li>
                    <li><a href="#">Greens</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-dried-fruit"></i><span>dry foods</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">noodles</a></li>
                    <li><a href="#">Powdered milk</a></li>
                    <li><a href="#">nut & yeast</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-fast-food"></i><span>fast foods</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">mango</a></li>
                    <li><a href="#">plumsor</a></li>
                    <li><a href="#">raisins</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-cheers"></i><span>drinks</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Wine</a></li>
                    <li><a href="#">Juice</a></li>
                    <li><a href="#">Water</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-beverage"></i><span>coffee</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Cappuchino</a></li>
                    <li><a href="#">Espresso</a></li>
                    <li><a href="#">Latte</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-barbecue"></i><span>meats</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Meatball</a></li>
                    <li><a href="#">Sausage</a></li>
                    <li><a href="#">Poultry</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-fish"></i><span>fishes</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Agujjim</a></li>
                    <li><a href="#">saltfish</a></li>
                    <li><a href="#">pazza</a></li>
                </ul>
            </li>
        </ul>
        
    </aside>
    <aside class="cart-sidebar">
        <div class="cart-header">
            <div class="cart-total"><i class="fas fa-shopping-basket"></i><span>total item (5)</span></div><button
                class="cart-close"><i class="icofont-close"></i></button>
        </div>
        <ul class="cart-list">
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="{{asset('front/images/product/01.jpg')}}"
                            alt="product"></a><button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                </div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="{{asset('front/images/product/02.jpg')}}"
                            alt="product"></a><button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                </div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="{{asset('front/images/product/03.jpg')}}"
                            alt="product"></a><button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                </div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="{{asset('front/images/product/04.jpg')}}"
                            alt="product"></a><button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                </div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="{{asset('front/images/product/05.jpg')}}"
                            alt="product"></a><button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                </div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
        </ul>
        <div class="cart-footer"><button class="coupon-btn">Do you have a coupon code?</button>
            <form class="coupon-form"><input type="text" placeholder="Enter your coupon code"><button
                    type="submit"><span>apply</span></button></form><a class="cart-checkout-btn"
                href="checkout.html"><span class="checkout-label">Proceed to Checkout</span><span
                    class="checkout-price">$369.78</span></a>
        </div>
    </aside>
    <aside class="nav-sidebar">
        <div class="nav-header"><a href="#"><img src="{{ asset('front/images/gologo.png') }}" alt="logo"></a><button
                class="nav-close"><i class="icofont-close"></i></button></div>
        <div class="nav-content">
            <div class="nav-btn"><a href="login.html" class="btn btn-inline"><i
                        class="fa fa-unlock-alt"></i><span>join here</span></a></div>
            <div class="nav-select-group">
                <div class="nav-select"><i class="icofont-world"></i><select class="select">
                        <option value="english" selected>English</option>
                        <option value="bangali">kinyarwanda</option>
                    </select></div>
                
            </div>
            
            
        </div>
    </aside>
    <div class="mobile-menu"><a href="index.html" title="Home Page"><i
                class="fas fa-home"></i><span>Home</span></a><button class="cate-btn" title="Category List"><i
                class="fas fa-list"></i><span>category</span></button><button class="cart-btn" title="Cartlist"><i
                class="fas fa-shopping-basket"></i><span>cartlist</span><sup>9+</sup></button><a href="wishlist.html"
            title="Wishlist"><i class="fas fa-heart"></i><span>wishlist</span><sup>0</sup></a><a href="compare.html"
            title="Compare List"><i class="fas fa-random"></i><span>compare</span><sup>0</sup></a></div>
    <div class="modal fade" id="product-view">
        <div class="modal-dialog">
            <div class="modal-content"><button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="view-gallery">
                                <div class="view-label-group"><label class="view-label new">new</label><label
                                        class="view-label off">-10%</label></div>
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="{{asset('front/images/product/01.jpg')}}" alt="product"></li>
                                    <li><img src="{{asset('front/images/product/01.jpg')}}" alt="product"></li>
                                    <li><img src="{{asset('front/images/product/01.jpg')}}" alt="product"></li>
                                    <li><img src="{{asset('front/images/product/01.jpg')}}" alt="product"></li>
                                    <li><img src="{{asset('front/images/product/01.jpg')}}" alt="product"></li>
                                    <li><img src="{{asset('front/images/product/01.jpg')}}" alt="product"></li>
                                    <li><img src="{{asset('front/images/product/01.jpg')}}" alt="product"></li>
                                </ul>
                                <ul class="thumb-slider">
                                    <li><img src="{{asset('front/images/product/01.jpg')}}" alt="product"></li>
                                    <li><img src="{{asset('front/images/product/01.jpg')}}" alt="product"></li>
                                    <li><img src="{{asset('front/images/product/01.jpg')}}" alt="product"></li>
                                    <li><img src="{{asset('front/images/product/01.jpg')}}" alt="product"></li>
                                    <li><img src="{{asset('front/images/product/01.jpg')}}" alt="product"></li>
                                    <li><img src="{{asset('front/images/product/01.jpg')}}" alt="product"></li>
                                    <li><img src="{{asset('front/images/product/01.jpg')}}" alt="product"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="product-video.html">existing product name</a></h3>
                                <div class="view-meta">
                                    <p>SKU:<span>1234567</span></p>
                                    <p>BRAND:<a href="#">radhuni</a></p>
                                </div>
                                <div class="view-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3 reviews)</a></div>
                                <h3 class="view-price"><del>$38.00</del><span>$24.00<small>/per kilo</small></span>
                                </h3>
                                <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non
                                    tempora magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos
                                    reprehenderit fuga</p>
                                <div class="view-list-group"><label class="view-list-title">tags:</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">organic</a></li>
                                        <li><a href="#">vegetable</a></li>
                                        <li><a href="#">chilis</a></li>
                                    </ul>
                                </div>
                                <div class="view-list-group"><label class="view-list-title">Share:</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                    </ul>
                                </div>
                                <div class="view-add-group"><button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add to cart</span></button>
                                    <div class="product-action"><button class="action-minus"
                                            title="Quantity Minus"><i class="icofont-minus"></i></button><input
                                            class="action-input" title="Quantity Number" type="text"
                                            name="quantity" value="1"><button class="action-plus"
                                            title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                                </div>
                                <div class="view-action-group"><a class="view-wish wish" href="#"
                                        title="Add Your Wishlist"><i class="icofont-heart"></i><span>add to
                                            wish</span></a><a class="view-compare" href="compare.html"
                                        title="Compare This Item"><i class="fas fa-random"></i><span>Compare
                                            This</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="banner-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="banner-category">
                        <div class="banner-category-head"><i class="fas fa-bars"></i><span>top categories</span></div>
                        <ul class="banner-category-list">
                            <li class="banner-category-item"><a href="#"><i
                                        class="flaticon-vegetable"></i><span>vegetables</span></a>
                                <div class="banner-category-dropdown">
                                    <h5>vegetables item</h5>
                                    <div class="banner-sub-category">
                                        <ul>
                                            <li><a href="#">carrot</a></li>
                                            <li><a href="#">broccoli</a></li>
                                            <li><a href="#">asparagus</a></li>
                                            <li><a href="#">cauliflower</a></li>
                                            <li><a href="#">cucumber</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">eggplant</a></li>
                                            <li><a href="#">green pepper</a></li>
                                            <li><a href="#">lettuce</a></li>
                                            <li><a href="#">mushrooms</a></li>
                                            <li><a href="#">onion</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">potato</a></li>
                                            <li><a href="#">pumpkin</a></li>
                                            <li><a href="#">tomato</a></li>
                                            <li><a href="#">beetroot</a></li>
                                            <li><a href="#">zucchini</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">radish</a></li>
                                            <li><a href="#">artichoke</a></li>
                                            <li><a href="#">cabbage</a></li>
                                            <li><a href="#">celery</a></li>
                                            <li><a href="#">parsley</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="banner-category-item"><a href="#"><i
                                        class="flaticon-groceries"></i><span>groceries</span></a>
                                <div class="banner-category-dropdown">
                                    <h5>groceries item</h5>
                                    <div class="banner-sub-category">
                                        <ul>
                                            <li><a href="#">Butter</a></li>
                                            <li><a href="#">Rice</a></li>
                                            <li><a href="#">Bread</a></li>
                                            <li><a href="#">Pasta</a></li>
                                            <li><a href="#">Cooking oil</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Cheese</a></li>
                                            <li><a href="#">Yogurt</a></li>
                                            <li><a href="#">Onions</a></li>
                                            <li><a href="#">Garlic</a></li>
                                            <li><a href="#">Pulses</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Soup</a></li>
                                            <li><a href="#">Salt</a></li>
                                            <li><a href="#">Pepper</a></li>
                                            <li><a href="#">Herbs</a></li>
                                            <li><a href="#">Sugar</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="banner-category-item"><a href="#"><i
                                        class="flaticon-fruit"></i><span>fruits</span></a>
                                <div class="banner-category-dropdown">
                                    <h5>fruits item</h5>
                                    <div class="banner-sub-category">
                                        <ul>
                                            <li><a href="#">Apple</a></li>
                                            <li><a href="#">Orange</a></li>
                                            <li><a href="#">Watermelon</a></li>
                                            <li><a href="#">Pear</a></li>
                                            <li><a href="#">Cherry</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Strawberry</a></li>
                                            <li><a href="#">Nectarine</a></li>
                                            <li><a href="#">Grape</a></li>
                                            <li><a href="#">Mango</a></li>
                                            <li><a href="#">Blueberry</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="banner-category-item"><a href="#"><i
                                        class="flaticon-dairy-products"></i><span>dairy farms</span></a>
                                <div class="banner-category-dropdown">
                                    <h5>dairy items</h5>
                                    <div class="banner-sub-category">
                                        <ul>
                                            <li><a href="#">Eggs</a></li>
                                            <li><a href="#">milk</a></li>
                                            <li><a href="#">Cheese</a></li>
                                            <li><a href="#">Butter</a></li>
                                            <li><a href="#">Shore</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="banner-category-item"><a href="#"><i class="flaticon-crab"></i><span>sea
                                        foods</span></a>
                                <div class="banner-category-dropdown">
                                    <h5>sea food items</h5>
                                    <div class="banner-sub-category">
                                        <ul>
                                            <li><a href="#">Lobster</a></li>
                                            <li><a href="#">Octopus</a></li>
                                            <li><a href="#">Shrimp</a></li>
                                            <li><a href="#">Oyster</a></li>
                                            <li><a href="#">Squid</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="banner-category-item"><a href="#"><i
                                        class="flaticon-salad"></i><span>diet foods</span></a>
                                <div class="banner-category-dropdown">
                                    <h5>diet food items</h5>
                                    <div class="banner-sub-category">
                                        <ul>
                                            <li><a href="#">Peanuts</a></li>
                                            <li><a href="#">Yogurt</a></li>
                                            <li><a href="#">vinegar</a></li>
                                            <li><a href="#">seeds</a></li>
                                            <li><a href="#">Coconuts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="banner-category-item"><a href="#"><i
                                        class="flaticon-dried-fruit"></i><span>dry foods</span></a>
                                <div class="banner-category-dropdown">
                                    <h5>dry food items</h5>
                                    <div class="banner-sub-category">
                                        <ul>
                                            <li><a href="#">Almond</a></li>
                                            <li><a href="#">Peanut</a></li>
                                            <li><a href="#">Raisin</a></li>
                                            <li><a href="#">Walnut</a></li>
                                            <li><a href="#">Pistachio</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="banner-category-item"><a href="#"><i
                                        class="flaticon-fast-food"></i><span>fast foods</span></a>
                                <div class="banner-category-dropdown">
                                    <h5>fast food items</h5>
                                    <div class="banner-sub-category">
                                        <ul>
                                            <li><a href="#">burgar</a></li>
                                            <li><a href="#">pizza</a></li>
                                            <li><a href="#">Fries</a></li>
                                            <li><a href="#">chiken</a></li>
                                            <li><a href="#">dessert</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="banner-category-item"><a href="#"><i
                                        class="flaticon-cheers"></i><span>drinks</span></a>
                                <div class="banner-category-dropdown">
                                    <h5>drinks item</h5>
                                    <div class="banner-sub-category">
                                        <ul>
                                            <li><a href="#">Wine</a></li>
                                            <li><a href="#">Coffee</a></li>
                                            <li><a href="#">Lemonade</a></li>
                                            <li><a href="#">chocolate</a></li>
                                            <li><a href="#">Milkshake</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="banner-category-item"><a href="#"><i
                                        class="flaticon-barbecue"></i><span>meats</span></a>
                                <div class="banner-category-dropdown">
                                    <h5>meats item</h5>
                                    <div class="banner-sub-category">
                                        <ul>
                                            <li><a href="#">Pork</a></li>
                                            <li><a href="#">Beef</a></li>
                                            <li><a href="#">Mutton</a></li>
                                            <li><a href="#">Chicken</a></li>
                                            <li><a href="#">Turkey</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="banner-category-item"><a href="#"><i
                                        class="flaticon-fish"></i><span>fishes</span></a>
                                <div class="banner-category-dropdown">
                                    <h5>fishes item</h5>
                                    <div class="banner-sub-category">
                                        <ul>
                                            <li><a href="#">Blue Marlin</a></li>
                                            <li><a href="#">Flounder</a></li>
                                            <li><a href="#">Hogfish</a></li>
                                            <li><a href="#">Mako Shark</a></li>
                                            <li><a href="#">pompano</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="home-grid-slider slider-dots">
                                <div class="banner-wrap bg1">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="banner-content">
                                                <h2>we are delivered organic foods item within 24 hours.</h2><a
                                                    href="#" class="btn btn-inline"><i
                                                        class="fas fa-shopping-basket"></i><span>shop now</span></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="banner-image"><img src="{{ asset('front/images/home/index/01.png') }}"
                                                    alt=""></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-wrap bg2">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="banner-content">
                                                <h2>get your organic healthy foods item online today.</h2><a
                                                    href="#" class="btn btn-inline"><i
                                                        class="fas fa-shopping-basket"></i><span>shop now</span></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="banner-image"><img src="{{ asset('front/images/home/index/02.png') }}"
                                                    alt=""></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-wrap bg3">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="banner-content">
                                                <h2>we are delivered organic foods item within 24 hours.</h2><a
                                                    href="#" class="btn btn-inline"><i
                                                        class="fas fa-shopping-basket"></i><span>shop now</span></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="banner-image"><img src="{{ asset('front/images/home/index/03.png') }}"
                                                    alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="banner-promo"><a href="#"><img src="{{ asset('front/images/promo/home/04.jpg')}}"
                                        alt="promo"></a></div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="banner-promo"><a href="#"><img src="{{ asset('front/images/promo/home/05.jpg')}}"
                                        alt="promo"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section intro-part">
        <div class="container">
            <div class="row intro-content">
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-truck"></i></div>
                        <div class="intro-content">
                            <h5>free home delivery</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-sync-alt"></i></div>
                        <div class="intro-content">
                            <h5>instant return policy</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-headset"></i></div>
                        <div class="intro-content">
                            <h5>quick support system</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon"><i class="fas fa-lock"></i></div>
                        <div class="intro-content">
                            <h5>secure payment way</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section deals-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>best deals on items</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="countdown deals-clock" data-countdown="2022/12/22"><span
                            class="countdown-time"><span>00</span><small>days</small></span><span
                            class="countdown-time"><span>00</span><small>hours</small></span><span
                            class="countdown-time"><span>00</span><small>minutes</small></span><span
                            class="countdown-time"><span>00</span><small>seconds</small></span></div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">
                
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text off">-15%</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                class="product-image" href="product-video.html"><img src="{{asset('front/images/product/05.jpg')}}"
                                    alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                    href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/kilo</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity"
                                    value="1"><button class="action-plus" title="Quantity Plus"><i
                                        class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text off">-18%</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                class="product-image" href="product-video.html"><img src="{{asset('front/images/product/06.jpg')}}"
                                    alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                    href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/12 piece</small></span></h6>
                            <button class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity"
                                    value="1"><button class="action-plus" title="Quantity Plus"><i
                                        class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text off">-30%</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                class="product-image" href="product-video.html"><img src="{{asset('front/images/product/07.jpg')}}"
                                    alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                    href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                                class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity"
                                    value="1"><button class="action-plus" title="Quantity Plus"><i
                                        class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label"><label class="label-text off">-25%</label></div><button
                                class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                class="product-image" href="product-video.html"><img src="{{asset('front/images/product/08.jpg')}}"
                                    alt="product"></a>
                            <div class="product-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                    data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                    href="#" class="fas fa-eye" data-bs-toggle="modal"
                                    data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3)</a></div>
                            <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                            <h6 class="product-price"><del>$34</del><span>$28<small>/6 piece</small></span></h6>
                            <button class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity"
                                    value="1"><button class="action-plus" title="Quantity Plus"><i
                                        class="icofont-plus"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25"><a href="shop-4column.html" class="btn btn-inline"><i
                                class="fas fa-eye"></i><span>view all deals</span></a></div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section promo-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="promo-content" style="background: url({{ asset('front/images/promo/home/09.jpg') }}) no-repeat center;">
                        <h3>only <span>$45</span>per kilogram</h3>
                        <h2>fresh Blueberries</h2><a href="shop-4column.html" class="btn btn-inline"><i
                                class="fas fa-shopping-basket"></i><span>shop now</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section newitem-part">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-heading">
                        <h2>Popular Shops</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-center">
                @forelse ($shops as $vendor)
                <div class="col">
                    <div class="category-wrap">
                        <div class="category-media">
                            <img src="{{asset($vendor->profile_image)}}" alt="{{ $vendor->shop_name }}">
                            <div class="category-overlay">
                                <a href="{{ route('vendors.products.show', $vendor->slug) }}"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="category-meta">
                            <h4>{{ $vendor->shop_name }}</h4><p>({{ $vendor->products_count }} items)</p>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
            <div class="row">
                <div class="col">
                    <div class="section-btn-25"><a href="shop-4column.html" class="btn btn-outline"><i
                                class="fas fa-eye"></i><span>view all new item</span></a></div>
                </div>
            </div>
        </div>
    </section>
   
@section('scripts')
@livewireScripts
@endsection
<!-- instagram section -->

@endsection
