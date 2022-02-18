<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper"><a href="/admin"><img class="blur-up lazyloaded" src="{{asset('assets/img/janiya-logo.jpg')}}" alt=""></a></div>
    </div>
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            {{-- @auth('vendor') --}}
            <div>
                <img class="img-60 rounded-circle lazyloaded blur-up"
                src="../assets/images/dashboard/man.png" alt="#">
            </div>
            {{-- @endauth --}}
            <h6 class="mt-3 f-14">
                {{-- @auth('admin') --}}
                {{-- {{Auth::guard('admin')->user()->name}} --}}
                {{-- @endauth --}}
                {{-- @auth('vendor') --}}
                {{-- {{Auth::guard('vendor')->user()->name}} --}}
                {{-- @endauth --}}
            </h6>
        </div>
        <ul class="sidebar-menu">
            {{-- @auth('admin') --}}
            <li><a class="sidebar-header" href="{{url('/admin/dashboard')}}"><i data-feather="home"></i><span>Dashboard</span></a></li>
            <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Products</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="#"><i class="fa fa-circle"></i>
                            <span>Product</span> <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="product-list.html"><i class="fa fa-circle"></i>Product List</a></li>
                            <li><a href="{{route('add-product')}}"><i class="fa fa-circle"></i>Add Product</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('product-category')}}"><i class="fa fa-circle"></i>Categories</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle"></i>
                            <span>Product Attributes</span> <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('colors')}}">
                                <span>Colors</span></a>
                            </li>
                            <li><a href="{{route('size')}}">
                                <span>Sizes</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Coupons</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="coupon-list.html"><i class="fa fa-circle"></i>List Coupons</a></li>
                    <li><a href="coupon-create.html"><i class="fa fa-circle"></i>Create Coupons </a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Sales</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="order.html"><i class="fa fa-circle"></i>Orders</a></li>
                    <li><a href="transactions.html"><i class="fa fa-circle"></i>Transactions</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="#"><i class="fa fa-circle"></i>
                            <span>Janiya Shops</span> <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('admin.shops')}}"><i class="fa fa-circle"></i>Shops</a></li>
                            <li><a href="create-vendors.html"><i class="fa fa-circle"></i>Add Shop</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('admin.affiliator')}}"><i class="fa fa-circle"></i>Affiliators</a></li>
                    <li><a href="{{route('admin.partners')}}"><i class="fa fa-circle"></i>Partners</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="reports.html"><i data-feather="bar-chart"></i><span>Reports</span></a></li>
            <li><a class="sidebar-header" href=""><i data-feather="settings" ></i><span>Settings</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="profile.html"><i class="fa fa-circle"></i>Profile</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="invoice.html"><i data-feather="archive"></i><span>Invoice</span></a>
            </li>
        </ul>
    </div>
</div>
