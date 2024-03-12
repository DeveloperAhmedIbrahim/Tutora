@extends('user.layout')
@section('title', 'About')
@section('content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ asset('assets/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb mb-2">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{ url('home') }}">Home</a></li>
                        <li class="list-inline-item text-white h3 font-secondary nasted">About Us</li>
                    </ul>
                    <p class="text-lighten mb-0">Our courses offer a good compromise between the continuous assessment
                        favoured by some universities and the emphasis placed on final exams by others.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- about -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="img-fluid w-100 mb-4" src="{{ asset('assets/images/about/about-page.jpg') }}" alt="about image">
                    <h2 class="section-title">ABOUT OUR JOURNEY</h2>
                    <p>
                        Built by kids, for kids. Here at
                        TheRaj Tutors, we aim to offer your child
                        every opportunity to grow and reach their
                        potential using personalized methods and
                        approaches. At TheRajTutors, we
                        understand that each child is unique and
                        has different learning needs. That's why
                        we tailor our teaching methods to match
                        each individual's strengths and
                        challenges. With a focus on creating a
                        positive and engaging environment, we
                        strive to make our classes enjoyable and
                        accessible for all students.
                    </p>
                    <p>
                        Whether your
                        child needs help with basic arithmetic or
                        accessible for all students. Whether your
                        child needs help with basic arithmetic or
                        advanced calculus, we have the expertise
                        to guide them towards success. Here, in
                        our close knit community, each of our
                        hand-picked tutors is selectively trained to
                        reach your child's brain in ways that no
                        one else can. Our goal is to build
                        confidence, academic achievement, and to
                        unlock the true ability of each student. So
                        join us, at TheRajTutors, and help us, help
                        you, to let your child breach the gaps in
                        their learning and harness their full
                        potential.
                        <br>
                        <b>-Eshan Raj, Founder and CEO</b>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /about -->

    <!-- funfacts -->
    <section class="section-sm bg-primary">
        <div class="container">
            <div class="row">
                <!-- funfacts item -->
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="text-center">
                        <h2 class="count text-white" data-count="60">0</h2>
                        <h5 class="text-white">TEACHERS</h5>
                    </div>
                </div>
                <!-- funfacts item -->
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="text-center">
                        <h2 class="count text-white" data-count="50">0</h2>
                        <h5 class="text-white">COURSES</h5>
                    </div>
                </div>
                <!-- funfacts item -->
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="text-center">
                        <h2 class="count text-white" data-count="1000">0</h2>
                        <h5 class="text-white">STUDENTS</h5>
                    </div>
                </div>
                <!-- funfacts item -->
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="text-center">
                        <h2 class="count text-white" data-count="3737">0</h2>
                        <h5 class="text-white">SATISFIED CLIENT</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /funfacts -->

    <!-- success story -->
    <section class="section bg-cover" data-background="{{ asset('assets/images/backgrounds/success-story.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-4 position-relative success-video">
                    <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video">
                        <i class="ti-control-play"></i>
                    </a>
                </div>
                <div class="col-lg-6 col-sm-8">
                    <div class="bg-white p-5">
                        <h2 class="section-title">Why Tutora?</h2>
                        <p>
                            <ul class="list-styled">
                                <li>Handpicked tutors from top schools in the country</li>
                                <li>Personalized help with schoolwork</li>
                                <li>Free consultation with tutor</li>
                                <li>Access to extra practice text and worksheets</li>
                                <li>Access to thousands of subject based worksheets</li>
                                <li>Personalized Study Plans</li>
                                <li>Mock Exams & Performance Analysis</li>
                                <li>Extended Support Beyond Sessions</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /success story -->

    <!-- teachers -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="section-title">Our Teachers</h2>
                </div>
                <!-- teacher -->
                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{ asset('assets/images/teachers/teacher-1.jpg') }}" alt="teacher">
                        <div class="card-body">
                            <a href="javasctipt:void(0)">
                                <h4 class="card-title">Jacke Masito</h4>
                            </a>
                            <div class="d-flex justify-content-between">
                                <span>Teacher</span>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a class="text-color"
                                            href="https://facebook.com/themefisher"><i class="ti-facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="text-color"
                                            href="https://twitter.com/themefisher"><i class="ti-twitter-alt"></i></a></li>
                                    <li class="list-inline-item"><a class="text-color"
                                            href="https://github.com/themefisher"><i class="ti-google"></i></a></li>
                                    <li class="list-inline-item"><a class="text-color"
                                            href="https://instagram.com/themefisher/"><i class="ti-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- teacher -->
                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{ asset('assets/images/teachers/teacher-2.jpg') }}" alt="teacher">
                        <div class="card-body">
                            <a href="javasctipt:void(0)">
                                <h4 class="card-title">Clark Malik</h4>
                            </a>
                            <div class="d-flex justify-content-between">
                                <span>Teacher</span>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a class="text-color"
                                            href="https://facebook.com/themefisher"><i class="ti-facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="text-color"
                                            href="https://twitter.com/themefisher"><i class="ti-twitter-alt"></i></a></li>
                                    <li class="list-inline-item"><a class="text-color"
                                            href="https://github.com/themefisher"><i class="ti-google"></i></a></li>
                                    <li class="list-inline-item"><a class="text-color"
                                            href="https://instagram.com/themefisher/"><i class="ti-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- teacher -->
                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{ asset('assets/images/teachers/teacher-3.jpg') }}" alt="teacher">
                        <div class="card-body">
                            <a href="javasctipt:void(0)">
                                <h4 class="card-title">John Doe</h4>
                            </a>
                            <div class="d-flex justify-content-between">
                                <span>Teacher</span>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a class="text-color"
                                            href="https://facebook.com/themefisher"><i class="ti-facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="text-color"
                                            href="https://twitter.com/themefisher"><i class="ti-twitter-alt"></i></a></li>
                                    <li class="list-inline-item"><a class="text-color"
                                            href="https://github.com/themefisher"><i class="ti-google"></i></a></li>
                                    <li class="list-inline-item"><a class="text-color"
                                            href="https://instagram.com/themefisher/"><i class="ti-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /teachers -->
@endsection
