@extends('user.layout')
@section('title', 'Courses')
@section('content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ asset('assets/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb mb-2">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{ url('home') }}">Home</a></li>
                        <li class="list-inline-item text-white h3 font-secondary nasted">Our Courses</li>
                    </ul>
                    <p class="text-lighten mb-0">Our courses offer a good compromise between the continuous assessment
                        favoured by some universities and the emphasis placed on final exams by others.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- courses -->
    <section class="section">
        <div class="container">
            <!-- course list -->
            <div class="row justify-content-center">
                <!-- course item -->
                @for ($i = 0; $i < count($courses); $i++)
                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="card p-0 border-primary rounded-0 hover-shadow">
                            <img class="card-img-top rounded-0" src="{{ asset('uploads/courses') }}/{{ $courses[$i]->image }}" alt="course thumb">
                            <div class="card-body">
                                {{-- <ul class="list-inline mb-2">
                                    <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                                    <li class="list-inline-item"><a class="text-color" href="{{ url('course/details') }}">Humanities</a></li>
                                </ul> --}}
                                <a href="{{ url('course/details') }}">
                                    <h4 class="card-title">{{ $courses[$i]->title }}</h4>
                                </a>
                                <p class="card-text mb-4">{!! Str::substr($courses[$i]->description, 0, 250) !!}......</p>
                                <a href="{{ url('course/details') }}/{{ $courses[$i]->id }}" class="btn btn-primary btn-sm">Apply Now</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <!-- /course list -->
        </div>
    </section>
    <!-- /courses -->
@endsection
