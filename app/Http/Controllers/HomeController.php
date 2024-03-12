<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return redirect('home');
    }

    public function home()
    {
        return view('user.home');
    }

    public function about()
    {
        return view('user.about');
    }

    public function courses()
    {
        return view('user.courses');
    }

    public function course_details()
    {
        return view('user.course-details');
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }
}
