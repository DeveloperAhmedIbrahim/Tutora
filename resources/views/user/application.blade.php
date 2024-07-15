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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">Contact Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-4 mb-lg-0">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Your Full Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Your Email Address" required>
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact Number</label>
                            <input type="text" class="form-control mb-3" id="contact" name="contact" placeholder="Your Contact Number" required>
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="text" class="form-control mb-3" id="age" name="age" placeholder="Your Age" required>
                        </div>
                        <div class="form-group">
                            <label for="math-levels">Ability to teach Mathmatics</label>
                            <input type="text" class="form-control mb-3" id="math-levels" name="math-levels" placeholder="What level of maths you can teach ?" required>
                        </div>
                        <div class="form-group">
                            <label for="credentials">What credentials do you have ?</label>
                            <input type="text" class="form-control mb-3" id="credentials" name="credentials" placeholder="What credentials do you have in the above fields ?" required>
                        </div>
                        <div class="form-group">
                            <label for="cover-letter">Why should we hire you?</label>
                            <textarea name="cover-letter" id="cover-letter" class="form-control mb-3" placeholder="Please write here cover letter" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="interview">When you available for interview?</label>
                            <input type="text" class="form-control mb-3" id="interview" name="interview" placeholder="If selected as a candidate, what days would you be available for an interview?" required>
                        </div>
                        <div class="form-group">
                            <label for="hear">How did you hear about us?</label>
                            <textarea name="hear" id="hear" class="form-control mb-3" placeholder="How did you hear about us?" required></textarea>
                        </div>
                        <button type="submit" value="send" class="btn btn-primary">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /contact -->
@endsection
