
<!doctype html>
<html lang="en">
<head>
<title>@yield('title') - Tutora</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Tutora">
    <meta name="author" content="Tutora">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/charts-c3/plugin.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/color_skins.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/sweetalert/sweetalert.css') }}"/>
</head>
<body class="theme-blush">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div><img src="{{ asset('assets/images/logo.png') }}" width="100"  alt="Tutora"></div>
        </div>
    </div>
    <div class="overlay"></div>
    <div id="wrapper">
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-left">
                    <div class="navbar-btn">
                        <a href="index.html">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Tutora Logo" class="img-fluid logo">
                        </a>
                        <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                    </div>
                    <a href="javascript:void(0);" class="icon-menu btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>
                </div>

                <div class="navbar-right">
                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ url('admin/logout') }}" class="icon-menu"><i class="icon-power"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>


        <div id="left-sidebar" class="sidebar">
            <div class="navbar-brand">
                <a href="{{ url('home') }}" target="_blank"><img src="{{ asset('assets/images/logo.png') }}" alt="Tutora Logo" class="img-fluid logo"><span>Tutora System</span></a>
                <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
            </div>
            <div class="sidebar-scroll">
                <div class="user-account">
                    <div class="user_div">
                        <img src="{{ asset('assets/images/logo.png') }}" class="user-photo" alt="User Profile Picture">
                    </div>
                    <div class="dropdown">
                        <span>Welcome,</span>
                        <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown">
                            <strong>{{ Auth::user()->name }}</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right account">
                            <li>
                                <a href="{{ url('admin/profile') }}">
                                    <i class="icon-user"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/logout') }}">
                                    <i class="icon-power"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        <li class="{{ request()->is('admin/dashboard')  == 1 ? 'active' : '' }}">
                            <a href="{{ url('/') }}">
                                <i class="fa-solid fa-house"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/users/*')  == 1 ? 'active' : '' }}">
                            <a href="{{ url('admin/users/list') }}">
                                <i class="fas fa-users"></i>
                                <span>Users</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/packages/*')  == 1 ? 'active' : '' }}">
                            <a href="{{ url('admin/packages/list') }}">
                                <i class="fa-solid fa-cube"></i>
                                <span>Packages</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        @yield('content')

    </div>
    <input type="hidden" value="{{ url('/') }}" id="url">
    <input type="hidden" value="{{ session('info') }}" id="info">
    <input type="hidden" value="{{ session('error') }}" id="error">
    <input type="hidden" value="{{ session('success') }}" id="success">
    <input type="hidden" value="{{ session('warning') }}" id="warning">
    <script src="{{ asset('assets/admin/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/admin/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/admin/bundles/c3.bundle.js') }}"></script>
    <script src="{{ asset('assets/admin/bundles/chartist.bundle.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/toastr/toastr.js') }}"></script>
    <script src="{{ asset('assets/admin/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/admin/js/index.js') }}"></script>
</body>
</html>
