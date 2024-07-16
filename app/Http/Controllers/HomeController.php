<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Package;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function contact(Request $request)
    {
        if($request->method() === 'POST')
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ]);
            $data = $request->all();
            Mail::to('siddiqui.ahmedibrahim@gmail.com')->send(new ContactMail($data));
            return view('user.contact');
        }
        else
        {
            return view('user.contact');
        }
    }

    public function application()
    {
        return view('user.application');
    }
}
