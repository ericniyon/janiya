<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper"><a href="/admin"><img class="blur-up lazyloaded" src="{{asset('front/images/gologo.png') }}" 
            style="width: 9rem;height:5rem"
            alt=""></a></div>
    </div>
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            <div>

            </div>
            <h6 class="mt-3 f-14">
            </h6>
        </div>
        <ul class="sidebar-menu">
            <li><a class="sidebar-header" href="{{url('/admin/dashboard')}}"><i data-feather="home"></i><span>Dashboard</span></a></li>
            <li><a class="sidebar-header" href="{{route('admin.products.all')}}"><i data-feather="box"></i> <span>Products</span></a>
            </li>
            <li><a class="sidebar-header" href="{{route('admin.product-category')}}"><i data-feather="circle"></i> <span>Product Categories</span></a>
            </li>
            <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Attributes</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{route('admin.colors')}}"> <span>Colors</span></a> </li>
                    <li><a href="{{route('admin.size')}}"> <span>Sizes</span></a> </li>
                    </li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Sales</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    {{-- <li><a href="{{ route('admin.allorders') }}"><i class="fa fa-circle"></i>Orders</a></li> --}}
                    <li><a href="{{ route('admin.admin-transaction') }}"><i class="fa fa-circle"></i>Transactions</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Go-Green Shops</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                            <li><a href="{{route('admin.shops')}}"><i class="fa fa-circle"></i>Shops</a></li>
                            <li><a href="{{ route('admin.shops.add') }}"><i class="fa fa-circle"></i>Add Shop</a></li>
                        </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">

                    <li><a href="{{route('admin.affiliator')}}"><i class="fa fa-circle"></i>Affiliators</a></li>
                    <li><a href="{{route('admin.partners')}}"><i class="fa fa-circle"></i>Partners</a></li>
                </ul>
            </li><li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Orders</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">

                    <li><a href="{{route('admin.shops-orders')}}"><i class="fa fa-circle"></i>Shops orders</a></li>
                    <li><a href="{{route('admin.Go-Green-orders')}}"><i class="fa fa-circle"></i>Go-Green orders</a></li>
                </ul>
            </li>
            {{-- <li><a class="sidebar-header" href="reports.html"><i data-feather="bar-chart"></i</i><span>Reports</span></a></li> --}}
            {{-- <li><a class="sidebar-header" href=""><i data-feather="settings" ></i><span>Settings</span><i class="fa fa-angle-right pull-right"></i></a> --}}
                {{-- <ul class="sidebar-submenu">
                    <li><a href="profile.html"><i class="fa fa-circle"></i>Profile</a></li>
                </ul> --}}
            {{-- </li> --}}
            {{-- <li><a class="sidebar-header" href="invoice.html"><i data-feather="archive"></i><span>Invoice</span></a>
            </li> --}}
        </ul>
    </div>
</div>
