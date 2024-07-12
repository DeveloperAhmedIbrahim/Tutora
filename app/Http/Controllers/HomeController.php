<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return redirect('home');
    }

    public function home()
    {
        $courses = Course::all();
        return view('user.home', compact('courses'));
    }

    public function about()
    {
        return view('user.about');
    }

    public function courses()
    {
        $courses = Course::all();
        return view('user.courses', compact('courses'));
    }

    public function course_details($id)
    {
        $course = Course::find($id);
        $courses = Course::skip(0)->take(3)->get();
        if($course == NULL)
        {
            return redirect()->back();
        }
        return view('user.course-details', compact('course', 'courses'));
    }

    public function packages()
    {
        $packages = Package::all();
        return view('user.packages', compact('packages'));
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
