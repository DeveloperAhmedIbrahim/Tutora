@extends('user.layout')
@section('title', 'Login')
@section('content')
    <!-- login -->
    <section class="section bg-gray">
        <div class="container py-5">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-lg-7 mb-4 mb-lg-0 py-5">
                    <h3 class="text-center">Login</h3>
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="text" class="form-control mb-3" id="email" name="email" value="{{ old('email') }}" placeholder="Enter Email Address">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control mb-3" id="password" name="password" value="{{ old('password') }}" placeholder="Enter Password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <button type="submit" value="send" class="btn btn-primary">Login</button>
                            <a href="javascript:void(0)">Forgot Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /login -->
@endsection
