<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper"><a href="/admin"><img class="blur-up lazyloaded" src="{{asset('assets/img/janiya-logo.jpg')}}" alt=""></a></div>
    </div>
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            <div><img class="img-60 rounded-circle lazyloaded blur-up" src="../assets/images/dashboard/man.png" alt="#">
            </div>
            <h6 class="mt-3 f-14">JOHN</h6>
            <p>general manager.</p>
        </div>
        <ul class="sidebar-menu">
            <li><a class="sidebar-header" href="/admin"><i data-feather="home"></i><span>Dashboard</span></a></li>
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
                    <li>
                        <a href="#"><i class="fa fa-circle"></i>
                            <span>Product Category</span> <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('product-category')}}"><i class="fa fa-circle"></i>Categories</a></li>
                            {{-- <li><a href="/"><i class="fa fa-circle"></i>Add Category</a></li> --}}
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle"></i>
                            <span>Product Attributes</span> <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="category-digital.html"><i class="fa fa-circle"></i>List</a></li>
                            <li><a href="add-digital-product.html"><i class="fa fa-circle"></i>Add New</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Sales</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="order.html"><i class="fa fa-circle"></i>Orders</a></li>
                    <li><a href="transactions.html"><i class="fa fa-circle"></i>Transactions</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="tag"></i><span>Coupons</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="coupon-list.html"><i class="fa fa-circle"></i>List Coupons</a></li>
                    <li><a href="coupon-create.html"><i class="fa fa-circle"></i>Create Coupons </a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="#"><i data-feather="clipboard"></i><span>Pages</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="pages-list.html"><i class="fa fa-circle"></i>List Page</a></li>
                    <li><a href="page-create.html"><i class="fa fa-circle"></i>Create Page</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="{{route('colors')}}"><i data-feather="camera"></i><span>Colors</span></a></li>
            <li><a class="sidebar-header" href="{{route('size')}}"><i data-feather="camera"></i><span>Sizes</span></a></li>
            <li><a class="sidebar-header" href="#"><i data-feather="align-left"></i><span>Menus</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="menu-list.html"><i class="fa fa-circle"></i>Menu Lists</a></li>
                    <li><a href="create-menu.html"><i class="fa fa-circle"></i>Create Menu</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="user-list.html"><i class="fa fa-circle"></i>User List</a></li>
                    <li><a href="create-user.html"><i class="fa fa-circle"></i>Create User</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="users"></i><span>Vendors</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="list-vendor.html"><i class="fa fa-circle"></i>Vendor List</a></li>
                    <li><a href="create-vendors.html"><i class="fa fa-circle"></i>Create Vendor</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="chrome"></i><span>Localization</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="translations.html"><i class="fa fa-circle"></i>Translations</a></li>
                    <li><a href="currency-rates.html"><i class="fa fa-circle"></i>Currency Rates</a></li>
                    <li><a href="taxes.html"><i class="fa fa-circle"></i>Taxes</a></li>
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
            <li><a class="sidebar-header" href="login.html"><i data-feather="log-in"></i><span>Login</span></a>
            </li>
        </ul>
    </div>
</div>
