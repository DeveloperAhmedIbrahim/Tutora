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
                    <li class="breadcrumb-item active">List</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header bline d-flex justify-content-between">
                        <h2>Packages List</h2>
                        <h2><a class="btn btn-theme" href="{{ url('admin/packages/new') }}">
                            <i class="fa-solid fa-plus"></i>
                            <span>New</span></a>
                        </h2>
                    </div>
                    <div class="body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < count($packages); $i++)
                                    <tr>
                                        <td>{{ $packages[$i]->id }}</td>
                                        <td>{{ $packages[$i]->name }}</td>
                                        <td>{{ Str::substr($packages[$i]->description, 0, 50) }}......</td>
                                        <td>${{ $packages[$i]->price }}</td>
                                        <td>
                                            <a href="{{ url('admin/packages/edit/') }}/{{ $packages[$i]->id }}" class="btn btn-success">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="btn btn-danger" onclick="confirmation('tag','{{ url('admin/packages/delete') }}/{{ $packages[$i]->id }}','Do you really want to delete this user ?')">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
