@extends('user.layout')
@section('title', 'Register')
@section('content')
    <!-- login -->
    <section class="section bg-gray">
        <div class="container py-5">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-lg-7 mb-4 mb-lg-0 py-5">
                    <h3 class="text-center">Register</h3>
                    <form action="{{ url('register') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control mb-3" id="name" name="name" value="{{ old('name') }}" placeholder="Enter Full Name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="text" class="form-control mb-3" id="email" name="email" value="{{ old('email') }}" placeholder="Enter Email Address">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                                <div class="input-group-append">
                                    <span class="input-group-text toggle-password" onclick="toggle_password(this,'password')">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Confirm Password</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation">
                                <div class="input-group-append">
                                    <span class="input-group-text toggle-password" onclick="toggle_password(this,'password_confirmation')">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <button type="submit" value="send" class="btn btn-primary">Register</button>
                            <a href="javascript:void(0)">Already Registered?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /login -->
@endsection
