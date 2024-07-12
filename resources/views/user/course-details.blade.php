@extends('user.layout')
@section('title', 'Course Details')
@section('content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ asset('assets/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb mb-2">
                        <li class="list-inline-item">
                            <a class="h2 text-primary font-secondary" href="{{ url('courses') }}">
                                Our Courses
                            </a>
                        </li>
                        <li class="list-inline-item text-white h3 font-secondary nasted">
                            {{ $course->title }}
                        </li>
                    </ul>
                    <p class="text-lighten mb-0">
                        Our courses offer a good compromise between the continuous assessment
                        favoured by some universities and the emphasis placed on final exams by others.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- section -->
    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <!-- course thumb -->
                    <img src="{{ asset('assets/images/courses/course-single.jpg') }}" class="img-fluid w-100">
                </div>
            </div>
            <!-- course info -->
            <div class="row align-items-center mb-5">
                <div class="col-xl-3 order-1 col-sm-6 mb-4 mb-xl-0">
                    <h2>{{ $course->title }}</h2>
                </div>
                <div class="col-xl-6 order-sm-3 order-xl-2 col-12 order-2">
                    <ul class="list-inline text-xl-center">
                        <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-book text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">COURSES</h6>
                                    <p class="mb-0">06 Month</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-alarm-clock text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">DURATION</h6>
                                    <p class="mb-0">03 Hours</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-wallet text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">FEE</h6>
                                    <p class="mb-0">From: $699</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 text-sm-right text-left order-sm-2 order-3 order-xl-3 col-sm-6 mb-4 mb-xl-0">
                    <a href="{{ url('course/details') }}" class="btn btn-primary">Apply now</a>
                </div>
                <!-- border -->
                <div class="col-12 mt-4 order-4">
                    <div class="border-bottom border-primary"></div>
                </div>
            </div>
            <!-- course details -->
            <div class="row">
                <div class="col-12 mb-4">
                    <h3>About Course</h3>
                    <p>{!! $course->description !!}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /section -->

    <!-- related course -->
    <section class="section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">Related Course</h2>
                </div>
            </div>
            <div class="row justify-content-center">
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
        </div>
    </section>
    <!-- /related course -->
@endsection
