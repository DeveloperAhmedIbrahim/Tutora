@extends('admin.layout')
@section('title','Courses')
@section('content')
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Courses</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('admin/dashboard') }}">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">Courses</li>
                    <li class="breadcrumb-item active">List</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header bline d-flex justify-content-between align-items-center">
                        <h2>Courses List</h2>
                        <h2><a class="btn btn-theme" href="{{ url('admin/courses/new') }}">
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
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < count($courses); $i++)
                                    <tr>
                                        <td>{{ $courses[$i]->id }}</td>
                                        <td>{{ $courses[$i]->title }}</td>
                                        <td><img src="{{ asset('uploads/courses') }}/{{ $courses[$i]->image }}" alt="" width="80"></td>
                                        <td>{!! Str::substr($courses[$i]->description, 0, 50) !!}......</td>
                                        <td>
                                            <a href="{{ url('admin/courses/edit/') }}/{{ $courses[$i]->id }}" class="btn btn-success">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="btn btn-danger" onclick="confirmation('tag','{{ url('admin/courses/delete') }}/{{ $courses[$i]->id }}','Do you really want to delete this course ?')">
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
