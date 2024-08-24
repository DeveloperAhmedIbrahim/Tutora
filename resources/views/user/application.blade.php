@extends('user.layout')
@section('title', 'Apply Now')
@section('content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{ asset('assets/images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb mb-2">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{ url('home') }}">Home</a></li>
                        <li class="list-inline-item text-white h3 font-secondary nasted">Join The Team</li>
                    </ul>
                    <p class="text-lighten mb-0">Fill out our preliminary questionnaire below to start your application process!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- contact -->
    <section class="section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">Application Form</h2>
                </div>
            </div>
            <div class="row" id="application">
                <div class="col-lg-12 mb-4 mb-lg-0">
                    <form action="{{ url('application/#application') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input value="{{ old('name') }}" type="text" class="form-control mb-3" id="name" name="name" placeholder="Your Full Name" >
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input value="{{ old('email') }}" type="email" class="form-control mb-3" id="email" name="email" placeholder="Your Email Address" >
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="contact">Phone Number</label>
                            <input value="{{ old('contact') }}" type="text" class="form-control mb-3" id="contact" name="contact" placeholder="Your Phone Number" >
                            @error('contact')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input value="{{ old('age') }}" type="text" class="form-control mb-3" id="age" name="age" placeholder="Your Age" >
                            @error('age')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="math-levels">Chosen Role</label>
                            <select name="" id="">
                                <option value="K-5 Math Tutor">K-5 Math Tutor</option>
                                <option value="Math 6 Tutor">Math 6 Tutor</option>
                                <option value="Pre-Algebra Tutor">Pre-Algebra Tutor</option>
                            </select>
                            <input value="{{ old('math-levels') }}" type="text" class="form-control mb-3" id="math-levels" name="math-levels" placeholder="What level of maths you can teach ?" >
                            @error('math-levels')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="credentials">What experience do you have ?</label>
                            <input value="{{ old('credentials') }}" type="text" class="form-control mb-3" id="credentials" name="credentials" placeholder="What experience do you have in the above fields ?" >
                            @error('credentials')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="cover-letter">Why should we hire you?</label>
                            <textarea name="cover-letter" id="cover-letter" class="form-control mb-3" placeholder="Please write a short paragraph explaining the strengths you’d bring to our team!" >{{ old('cover-letter') }}</textarea>
                            @error('cover-letter')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="interview">“When are you available for an interview?</label>
                            <input value="{{ old('interview') }}" type="text" class="form-control mb-3" id="interview" name="interview" placeholder="If selected as a candidate, what days would you be available for an interview?" >
                            @error('interview')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="hear">How did you hear about us?</label>
                            <textarea name="hear" id="hear" class="form-control mb-3" placeholder="How did you hear about us?" >{{ old('hear') }}</textarea>
                            @error('hear')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" value="send" class="btn btn-primary">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /contact -->
@endsection
