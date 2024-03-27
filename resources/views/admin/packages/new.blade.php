@extends('admin.layout')
@section('title','Packages')
@section('content')
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Packages</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('admin/dashboard') }}">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">Packages</li>
                    <li class="breadcrumb-item active">New</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header bline d-flex justify-content-between align-items-center">
                        <h2>New Package</h2>
                        <h2><a class="btn btn-theme" href="{{ url('admin/packages/list') }}">
                            <i class="fa-solid fa-arrow-left"></i>
                            <span>Return</span></a>
                        </h2>
                    </div>
                    <form action="{{ url('admin/packages/insert') }}" method="post">
                        @csrf
                        <div class="body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}">
                                    @error('price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" cols="30" rows="3" class="form-control">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="details">Details</label>
                                <textarea name="details" id="ckeditor" cols="30" rows="10" class="form-control">{{ old('details') }}</textarea>
                                @error('details')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <button type="submit" class="btn btn-theme">
                                <i class="fas fa-check"></i>
                                <span>Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
