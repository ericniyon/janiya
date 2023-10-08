<div class="page-main-header">
    <div class="main-header-right row">
        <div class="main-header-left d-lg-none w-auto">
            <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="{{asset('front/images/gologo.png')}}" alt=""></a></div>
        </div>
        <div class="mobile-sidebar w-auto">
            <div class="media-body text-end switch-sm">
                <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
            </div>
        </div>
        <div class="nav-right col">
            <ul class="nav-menus">

                <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize-2"></i></a></li>

                <li class="onhover-dropdown"><i data-feather="bell"></i><span class="badge badge-pill badge-primary pull-right notification-badge">3</span><span class="dot"></span>
                    <ul class="notification-dropdown onhover-show-div p-0">
                        <li>Notification <span class="badge badge-pill badge-primary pull-right">3</span></li>
                        <li>
                            <div class="media">
                                <div class="media-body">
                                    <h6 class="mt-0"><span><i class="shopping-color" data-feather="shopping-bag"></i></span>Your order ready for Ship..!</h6>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                </div>
                            </div>
                        </li>
                        <li class="txt-dark"><a href="#">All</a> notification</li>
                    </ul>
                </li>

                <li class="onhover-dropdown">
                    <div class="media align-items-center">

                        <img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded" src="{{ asset('assets/images/dashboard/man.png') }}" >

                    </div>
                    <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                        <li><a href=""><i data-feather="user"></i>Edit Profile</a></li>
                        {{-- <li><a href="{{ route('admin-profile') }}"><i data-feather="user"></i>Edit Profile</a></li> --}}
                        <li><a href="#"><i data-feather="settings"></i>Settings</a></li>
                        <li><a href="
                            @if (auth()->guard('admin')->check())
                                {{route('admin.logout')}}
                            @elseif (auth()->guard('vendor')->check())
                                {{route('vendor.logout')}}
                            @else
                                {{route('logout')}}
                            @endif
                            "onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i data-feather="log-out"></i>Logout</a></li>
                            <form id="logout-form"
                            action="
                            @if (auth()->guard('admin')->check())
                                {{route('admin.logout')}}
                            @elseif (auth()->guard('vendor')->check())
                                {{route('vendor.logout')}}
                            @else
                                {{route('logout')}}
                            @endif
                            "
                            method="POST" class="d-none">
                                @csrf
                            </form>
                    </ul>
                </li>
            </ul>
            <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
        </div>
    </div>
</div>
