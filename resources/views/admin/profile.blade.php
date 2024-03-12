@extends('admin.layout')
@section('title','Profile')
@section('content')
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Profile</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('admin/dashboard') }}">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item active">Profile</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form action="{{ url('admin/profile') }}" method="POST">
                        @csrf
                        <div class="header bline">
                            <h2>Profile Details</h2>
                        </div>
                        <div class="body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name', Auth::user()->name) }}" placeholder="Enter Name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="text" name="email" class="form-control" value="{{ old('email', Auth::user()->email) }}" placeholder="Enter Emai Address">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    Password <span class="text-info">(Leave these field empty if you don't want to change password.)</span>
                                </label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" id="password" value="" placeholder="Enter Password">
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
                                <label for="password_confirmation">Password Confirmation</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="" placeholder="Enter Password">
                                    <div class="input-group-append">
                                        <span class="input-group-text toggle-password" onclick="toggle_password(this,'password_confirmation')">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">
                                <i class="fas fa-check"></i>
                                <span>Save</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
