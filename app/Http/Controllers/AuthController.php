<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 2;
        $user->status = 1;
        $user->save();

        return redirect('login')->with('success','You have registered successfully.');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::where([
            ['email',$request->email],
            ['role',2]
        ])->first();
        if($user != NULL)
        {
            if(Hash::check($request->password, $user->password))
            {
                Auth::login($user);
                return redirect('home')->with('success','Logged in successfully.');
            }
            else
            {
                return redirect()->back()->with('password','This password is not connected with that email.');
            }
        }
        else
        {
            return redirect()->back()->with('email','This email is not connected with any account.');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('home')->with('success','Session closed successfully.');
    }
}
