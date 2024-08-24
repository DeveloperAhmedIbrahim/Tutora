@extends('user.layout')
@section('title', 'Home')
@section('content')
    <!-- hero slider -->
    <section class="hero-section overlay bg-cover" data-background="{{ asset('assets/images/banner/banner-1.jpg') }}">
        <div class="container">
            <div class="hero-slider">
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3"
                                data-animation-in="fadeInLeft" data-delay-in=".1">Welcome to Tutora!</h1>
                            <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5"
                                data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">
                                As an online tutoring platform for students K-12, our mission is to empower students to reach their full potential,
                                both academically and within their own communities. With our innovative, a"ordable and personalized teaching
                                methods, we tailor learning experiences to each student’s unique needs, pushing the boundaries of what they can
                                achieve. Join us at Tutora and let’s work together to unlock your child’s full potential!
                            </p>
                            <a href="{{ url('contact') }}" class="btn btn-primary" data-animation-out="fadeOutRight"
                                data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft"
                                data-delay-in=".7">Explore Course</a>
                        </div>
                    </div>
                </div>
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3"
                                data-animation-in="fadeInDown" data-delay-in=".1">Welcome to Tutora!</h1>
                            <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5"
                                data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">
                                As an online tutoring platform for students K-12, our mission is to empower students to reach their full potential,
                                both academically and within their own communities. With our innovative, a"ordable and personalized teaching
                                methods, we tailor learning experiences to each student’s unique needs, pushing the boundaries of what they can
                                achieve. Join us at Tutora and let’s work together to unlock your child’s full potential!
                            </p>
                            <a href="{{ url('contact') }}" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5"
                                data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Explore Course</a>
                        </div>
                    </div>
                </div>
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3"
                                data-animation-in="fadeInUp" data-delay-in=".1">Welcome to Tutora!</h1>
                            <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5"
                                data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">
                                As an online tutoring platform for students K-12, our mission is to empower students to reach their full potential,
                                both academically and within their own communities. With our innovative, a"ordable and personalized teaching
                                methods, we tailor learning experiences to each student’s unique needs, pushing the boundaries of what they can
                                achieve. Join us at Tutora and let’s work together to unlock your child’s full potential!
                            </p>
                            <a href="{{ url('contact') }}" class="btn btn-primary" data-animation-out="fadeOutDown"
                                data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /hero slider -->

    <!-- success story -->
    <section class="section bg-cover" data-background="{{ asset('assets/images/backgrounds/success-story.jpg') }}" style="margin-top: -90px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-4 position-relative success-video">
                    {{-- <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video">
                        <i class="ti-control-play"></i>
                    </a> --}}
                    {{-- <a class="play-btn" href="javascript:void(0)" data-vbtype="video">
                        <i class="ti-control-play"></i>
                    </a> --}}
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

    <!-- banner-feature -->
    <section class="bg-gray overflow-md-hidden">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-4 col-lg-5 align-self-end">
                    <img class="img-fluid w-100" src="{{ asset('assets/images/banner/banner-feature.png') }}" alt="banner-feature">
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="row feature-blocks bg-gray justify-content-between">
                        <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                            <i class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                            <h3 class="mb-xl-4 mb-lg-3 mb-4">Our Mission</h3>
                            <p>
                                We aim to empower students in reaching their full potential as students. However,
                                we recognize that academics aren’t for everyone, but are a necessary part of a student’s life. Our goal is to allow
                                students the ability to achieve what they want to achieve, by providing them with a strong foundation in the
                                classroom, even if that’s ultimately not their chosen path.                            </p>
                        </div>
                        <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                            <i class="ti-blackboard mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                            <h3 class="mb-xl-4 mb-lg-3 mb-4">Our Courses</h3>
                            <p>
                                Tutora o"ers mathematics courses ranging from kindergarten to high school level. Each of our courses aims at
                                reaching student’s in a unique way to best prepare them for the classroom.                            </p>
                        </div>
                        <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                            <i class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                            <h3 class="mb-xl-4 mb-lg-3 mb-4">Pricing</h3>
                            <p>
                                Our main mission is reaching as many students as possible, with as a"ordable pricing as possible. Tutora’s courses
                                advertise comfortable price tags, so we can connect with young minds everywhere. For exact pricing, feel free to check
                                out our Courses page!
                            </p>
                        </div>
                        <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                            <i class="ti-write mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                            <h3 class="mb-xl-4 mb-lg-3 mb-4">Join The Team</h3>
                            <p>
                                We’re always looking for new tutors! If you think you’d be a good #t for the Tutora family, you can start your
                                application using the Join The Team menu in the navigation bar. Prospective tutors will undertake a preliminary
                                questionnaire, and if selected, will enjoy high starting wages, $exible hours, material to use in sessions, and
                                opportunities for professional development and advancement.                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /banner-feature -->

    <!-- about us -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1">
                    <h2 class="section-title">Discover the power of your mind.</h2>
                    <p>
                        Unlock your full potential with Tutora - an
                        online tutoring company specialized in providing
                        comprehensive math courses for elementary to
                        high school children. Our unique approach allows
                        students to learn from their peers, creating a
                        supportive and engaging learning environment.
                        Don't settle for average, strive for excellence with
                        Tutora.
                    </p>
                    <a href="{{ url('about') }}" class="btn btn-outline-primary">Learn more</a>
                </div>
                <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                    <img class="img-fluid w-100" src="{{ asset('assets/images/about/about-us.jpg') }}" alt="about image">
                </div>
            </div>
        </div>
    </section>
    <!-- /about us -->

    <!-- courses -->
    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center section-title justify-content-between">
                        <h2 class="mb-0 text-nowrap mr-3">Our Course</h2>
                        <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                        <div>
                            <a href="{{ url('courses') }}" class="btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block">see
                                all</a>
                        </div>
                    </div>
                </div>
            </div>
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
                                <a href="{{ url('course/details') }}/{{ $courses[$i]->id }}" class="btn btn-primary btn-sm">Explore Course</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <!-- /course list -->
            <!-- mobile see all button -->
            <div class="row">
                <div class="col-12 text-center">
                    <a href="{{ url('courses') }}" class="btn btn-sm btn-outline-primary d-sm-none d-inline-block">Explore More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /courses -->

    <!-- cta -->
    <section class="section bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h6 class="text-white font-secondary mb-0">Click to Join the Advance Workshop</h6>
                    <h2 class="section-title text-white">Training In Advannce Networking</h2>
                    <a href="{{ url('contact') }}" class="btn btn-light">join now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /cta -->

    <!-- teachers -->
    {{-- <section class="section">
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
                            <a href="javascript:void(0)">
                                <h4 class="card-title">Jacke Masito</h4>
                            </a>
                            <p>Teacher</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="text-color" href="https://facebook.com/Tutora"><i
                                            class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="https://twitter.com/Tutora"><i
                                            class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="https://github.com/Tutora"><i
                                            class="ti-google"></i></a></li>
                                <li class="list-inline-item"><a class="text-color"
                                        href="https://instagram.com/Tutora/"><i class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- teacher -->
                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{ asset('assets/images/teachers/teacher-2.jpg') }}" alt="teacher">
                        <div class="card-body">
                            <a href="javascript:void(0)">
                                <h4 class="card-title">Clark Malik</h4>
                            </a>
                            <p>Teacher</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="text-color" href="https://facebook.com/Tutora"><i
                                            class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="https://twitter.com/Tutora"><i
                                            class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="https://github.com/Tutora"><i
                                            class="ti-google"></i></a></li>
                                <li class="list-inline-item"><a class="text-color"
                                        href="https://instagram.com/Tutora/"><i class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- teacher -->
                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{ asset('assets/images/teachers/teacher-3.jpg') }}" alt="teacher">
                        <div class="card-body">
                            <a href="javascript:void(0)">
                                <h4 class="card-title">John Doe</h4>
                            </a>
                            <p>Teacher</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="text-color" href="https://facebook.com/Tutora"><i
                                            class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="https://twitter.com/Tutora"><i
                                            class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="text-color" href="https://github.com/Tutora"><i
                                            class="ti-google"></i></a></li>
                                <li class="list-inline-item"><a class="text-color"
                                        href="https://instagram.com/Tutora/"><i class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- /teachers -->

@endsection
