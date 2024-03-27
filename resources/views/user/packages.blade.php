@extends('user.layout')
@section('title', 'Packages')
@section('content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ asset('assets/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb mb-2">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{ url('home') }}">Home</a></li>
                        <li class="list-inline-item text-white h3 font-secondary nasted">Our Packages</li>
                    </ul>
                    <p class="text-lighten mb-0">
                        Our packages offer a good compromise between the continuous assessment
                        favoured by some universities and the emphasis placed on final exams by others.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- packages -->
    <section class="section packages">
        <div class="container">
            <!-- packages list -->
            <div class="row justify-content-center">
                <!-- packages item -->
                @for ($i = 0; $i < count($packages); $i++)
                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="card p-0 border-primary rounded-0 hover-shadow border-theme">
                            <div class="card-body">
                                <div class="text-center py-2">
                                    <b>{{ $packages[$i]->name }}</b>
                                </div>
                                <div class="text-left py-2">
                                    <p>
                                        {{ $packages[$i]->description }}
                                    </p>
                                </div>
                                <div class="text-center py-2">
                                    <h2>${{ $packages[$i]->price }}</h2>
                                </div>
                                <div class="text-left py-2">
                                    <p>
                                        {!! $packages[$i]->details !!}
                                    </p>
                                </div>
                                <div class="text-center py-2">
                                    <a href="javascript:void(0)" class="btn btn-outline-primary py-2 rounded-pill">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <!-- /packages list -->
        </div>
    </section>
    <!-- /packages -->
@endsection
