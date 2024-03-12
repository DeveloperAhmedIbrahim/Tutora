<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if($request->method() == 'GET')
        {
            return view('admin.auth.login');
        }
        elseif($request->method() == 'POST')
        {
            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
            $admin = User::where([
                ['email',$request->email],
                ['role',1],
            ])->first();
            if($admin != NULL)
            {
                if(Hash::check($request->password, $admin->password))
                {
                    Auth::login($admin);
                    return redirect('admin/dashboard')->with('success','Logged in successfully.');
                }
                else
                {
                    return redirect()->back()->with('password','This password is not connected with that email.');
                }
            }
            else
            {
                return redirect()->back()->with('email','This email is not connected with any account');
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('admin/login')->with('success','Session closed successfully.');
    }

    public function profile(Request $request)
    {
        if(Auth::check() && Auth::user()->role == 1)
        {
            return redirect('admin/dashboard');
        }
        if($request->method() == 'GET')
        {
            return view('admin.profile');
        }
        elseif($request->method() == 'POST')
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
            ]);
            $admin = User::find(Auth::user()->id);
            if($request->password != NULL)
            {
                $request->validate([
                    'password' => 'required|confirmed',
                    'password_confirmation' => 'required',
                ]);
                $admin->password = Hash::make($request->password);
            }
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->save();
            return redirect()->back()->with('success','Profile details saved.');
        }
    }
}
