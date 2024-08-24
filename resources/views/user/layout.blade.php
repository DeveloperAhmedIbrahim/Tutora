<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title') - Tutora</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Tutora">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Tutora">
    <meta name="generator" content="Tutora">
    <meta name="theme-name" content="Tutora" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/venobox/venobox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/simply-notify/simple-notify.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
</head>

<body>
    {{-- <div class="preloader">
        <img src="{{ asset('assets/images/preloader.gif') }}" alt="preloader">
    </div> --}}
    <header class="header">
        <div class="top-header py-2 bg-white">
            <div class="container">
                <div class="row no-gutters">
                    {{-- <div class="col-lg-4 text-center text-lg-left">
                        <a class="text-color mr-3" href="tel:+443003030266"><strong>CALL</strong> +44 300 303 0266</a>
                        <ul class="list-inline d-inline">
                            <li class="list-inline-item mx-0">
                                <a class="d-inline-block p-2 text-color" href="https://facebook.com"><i class="ti-facebook"></i></a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a class="d-inline-block p-2 text-color" href="https://twitter.com"><i class="ti-twitter-alt"></i></a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a class="d-inline-block p-2 text-color" href="https://github.com"><i class="ti-github"></i></a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a class="d-inline-block p-2 text-color" href="https://instagram.com"><i class="ti-instagram"></i></a>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="col-lg-12 text-center text-lg-right">
                        <ul class="list-inline">
                            @if (Auth::check())
                                <li class="list-inline-item">
                                    <a href="{{ url('logout') }}" class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" style="font-size: 14px;"><b>logout</b></a>
                                </li>
                            @else
                                <li class="list-inline-item">
                                    <a href="{{ url('login') }}" class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" style="font-size: 14px;"><b>login</b></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ url('register') }}" class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" style="font-size: 14px;"><b>register</b></a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navigation w-100">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark p-0">
                    <a class="navbar-brand d-flex align-items-center" href="{{ url('home') }}">
                        <img class="mr-2" src="{{ asset('assets/images/logo.png') }}" alt="logo" width="100">
                        <span style="font-size: 35px" class="text-theme-secondary"><b>Tutora</b></span>
                    </a>
                    <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse"
                        data-target="#navigation" aria-controls="navigation" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto text-center">
                            <li class="nav-item {{ request()->is('home') == 1 ? 'active' : '' }}">
                                <a class="nav-link" href="{{ url('home') }}">Home</a>
                            </li>
                            <li class="nav-item {{ request()->is('about') == 1 ? 'active' : '' }} @@about">
                                <a class="nav-link" href="{{ url('about') }}">About</a>
                            </li>
                            <li class="nav-item {{ request()->is('courses') == 1 ? 'active' : '' }} @@courses">
                                <a class="nav-link" href="{{ url('courses') }}">COURSES</a>
                            </li>
                            <li class="nav-item {{ request()->is('packages') == 1 ? 'active' : '' }} @@packages">
                                <a class="nav-link" href="{{ url('packages') }}">PACKAGES</a>
                            </li>
                            <li class="nav-item {{ request()->is('contact') == 1 ? 'active' : '' }} @@contact">
                                <a class="nav-link" href="{{ url('contact') }}">Apply Now</a>
                            </li>
                            <li class="nav-item {{ request()->is('application') == 1 ? 'active' : '' }} @@application">
                                <a class="nav-link" href="{{ url('application') }}">Join The Team</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Register</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login">
                        <form action="#" class="row">
                            <div class="col-12">
                                <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone"
                                    placeholder="Phone">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control mb-3" id="signupName" name="signupName"
                                    placeholder="Name">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail"
                                    placeholder="Email">
                            </div>
                            <div class="col-12">
                                <input type="password" class="form-control mb-3" id="signupPassword"
                                    name="signupPassword" placeholder="Password">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">SIGN UP</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Login</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone"
                                placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="loginName" name="loginName"
                                placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword"
                                placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <footer>
        <div class="footer bg-footer border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 mb-5 mb-lg-0">
                        <a class="logo-footer" href="{{ url('home') }}">
                            <img class="img-fluid mb-4 w-100" src="{{ asset('assets/images/full-logo.png') }}" alt="logo">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-5 mb-md-0">
                        <h4 class="text-white mb-5">COMPANY</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3"><a class="text-color" href="{{ url('about') }}">About Us</a></li>
                            <li class="mb-3"><a class="text-color" href="{{ url('courses') }}">Courses</a></li>
                            <li class="mb-3"><a class="text-color" href="{{ url('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    {{-- <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                        <h4 class="text-white mb-5">LINKS</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a class="text-color" href="https://facebook.com/themefisher">
                                    <i class="fa-brands fa-square-facebook fa-2x"></i>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="text-color" href="https://facebook.com/themefisher">
                                    <i class="fa-brands fa-linkedin fa-2x"></i>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="text-color" href="https://facebook.com/themefisher">
                                    <i class="fa-brands fa-square-instagram fa-2x"></i>
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="col-lg-5 col-md-5 mb-5 mb-md-0">
                        <h4 class="text-white mb-5">SUPPORT</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2">80 Arch Street Needham MA</li>
                            <li class="mb-2">+1 (2) 345 6789</li>
                            <li class="mb-2">tutora@thetutora.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright py-4 bg-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 text-sm-left text-center">
                        <p class="mb-0">Copyright &copy;
                            <script>
                                var CurrentYear = new Date().getFullYear()
                                document.write(CurrentYear)
                            </script>
                            , designed & developed by <a href="https://www.trigrafix.com/" class="text-muted">Tri Grafix</a>
                        </p>
                    </div>
                    <div class="col-sm-5 text-sm-right text-center">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="d-inline-block p-2"
                                    href="https://facebook.com/Tutora/"><i class="ti-facebook text-primary"></i></a>
                            </li>
                            <li class="list-inline-item"><a class="d-inline-block p-2"
                                    href="https://twitter.com/Tutora"><i class="ti-twitter-alt text-primary"></i></a>
                            </li>
                            <li class="list-inline-item"><a class="d-inline-block p-2"
                                    href="https://github.com/Tutora"><i class="ti-github text-primary"></i></a></li>
                            <li class="list-inline-item"><a class="d-inline-block p-2"
                                    href="https://instagram.com/Tutora/"><i class="ti-instagram text-primary"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <input type="hidden" value="{{ session('success') }}" id="success">
    <input type="hidden" value="{{ session('warning') }}" id="warning">
    <input type="hidden" value="{{ session('error') }}" id="error">
    <input type="hidden" value="{{ session('url') }}" id="url">
    <script src="{{ asset('assets/plugins/jQuery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/plugins/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
    <script src="{{ asset('assets/plugins/google-map/gmap.js') }}"></script>
    <script src="{{asset('assets/plugins/simply-notify/simple-notify.min.js')}}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
