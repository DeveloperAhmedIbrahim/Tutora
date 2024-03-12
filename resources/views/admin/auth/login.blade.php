
<!doctype html>
<html lang="en">
    <head>
        <title>Admin Login - Tutora</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta name="description" content="Tutora">
        <meta name="author" content="Tutora">
        <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/vendor/toastr/toastr.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/css/color_skins.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    </head>
    <body class="theme-blush">
        <div id="wrapper" class="auth-main">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-8">
                        <div class="auth_detail">
                            <h2 class="text-monospace">
                                Everything<br> you need for
                                <div id="carouselExampleControls" class="carousel vert slide" data-ride="carousel" data-interval="1500">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">your Admin</div>
                                        <div class="carousel-item">your Project</div>
                                        <div class="carousel-item">your Dashboard</div>
                                        <div class="carousel-item">your Application</div>
                                        <div class="carousel-item">your Client</div>
                                    </div>
                                </div>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="header">
                                <p class="lead"><b>Admin Access</b></p>
                            </div>
                            <div class="body">
                                <form class="form-auth-small" action="{{ url('admin/login') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Enter Email Address">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        @if (Session::has('email'))
                                            <span class="text-danger">{{ $message }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}" placeholder="Enter Password">
                                            <div class="input-group-append">
                                                <span class="input-group-text toggle-password" onclick="toggle_password(this,'password')">
                                                    <i class="fas fa-eye"></i>
                                                </span>
                                            </div>
                                        </div>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        @if (Session::has('password'))
                                            <span class="text-danger">{{ $message }}</span>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" value="{{ url('/') }}" id="url">
        <input type="hidden" value="{{ session('info') }}" id="info">
        <input type="hidden" value="{{ session('error') }}" id="error">
        <input type="hidden" value="{{ session('success') }}" id="success">
        <input type="hidden" value="{{ session('warning') }}" id="warning">
        <script src="{{ asset('assets/admin/bundles/libscripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/admin/bundles/vendorscripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/admin/bundles/mainscripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/admin/vendor/toastr/toastr.js') }}"></script>
        <script src="{{ asset('assets/admin/js/index.js') }}"></script>
    </body>
</html>
