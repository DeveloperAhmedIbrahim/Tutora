@extends('user.layout')
@section('title', 'Contact')
@section('content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ asset('assets/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb mb-2">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{ url('home') }}">Home</a></li>
                        <li class="list-inline-item text-white h3 font-secondary nasted">Apply Now</li>
                    </ul>
                    <p class="text-lighten mb-0">Our courses offer a good compromise between the continuous assessment
                        favoured by some universities and the emphasis placed on final exams by others.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- contact -->
    <section class="section bg-gray">
        <div class="container" id="contact">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">Apply Now</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <form action="{{ url('contact#contact') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" id="name" name="name" value="{{ old('name') }}" placeholder="Your Name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control mb-3" id="mail" name="email" value="{{ old('email') }}" placeholder="Your Email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" id="subject" name="subject" value="{{ old('subject') }}" placeholder="Subject">
                            @error('subject')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" value="send" class="btn btn-primary">SEND MESSAGE</button>
                    </form>
                </div>
                <div class="col-lg-5">
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit recusandae voluptates
                        doloremque veniam temporibus porro culpa ipsa, nisi soluta minima saepe laboriosam debitis nesciunt.
                        Dolore, labore. Accusamus nulla sed cum aliquid exercitationem debitis error harum porro maxime quo
                        iusto aliquam dicta modi earum fugiat, vel possimus commodi, deleniti et veniam, fuga ipsum
                        praesentium. Odit unde optio nulla ipsum quae obcaecati! Quod esse natus quibusdam asperiores quam
                        vel, tempore itaque architecto ducimus expedita</p>
                    <a href="tel:+8802057843248" class="text-color h5 d-block">+880 20 5784 3248</a>
                    <a href="mailto:yourmail@email.com" class="mb-5 text-color h5 d-block">yourmail@email.com</a>
                    <p>71 Shelton Street<br>London WC2H 9JQ England</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /contact -->

    <!-- gmap -->
    <section class="section pt-0">
        <!-- Google Map -->
        <div id="map_canvas" data-latitude="51.507351" data-longitude="-0.127758"></div>
    </section>
    <!-- /gmap -->
@endsection
