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
                    <div class="header bline">
                        <h2>Users List</h2>
                    </div>
                    <div class="body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < count($users); $i++)
                                    <tr>
                                        <td>{{ $users[$i]->id }}</td>
                                        <td>{{ $users[$i]->name }}</td>
                                        <td>{{ $users[$i]->email }}</td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-success">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="btn btn-danger" onclick="confirmation('tag','{{ url('admin/users/delete') }}/{{ $users[$i]->id }}','Do you really want to delete this user ?')">
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
