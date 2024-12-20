<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list()
    {
        $users = User::where('role',2)->get();
        return view('admin.users.list',compact('users'));
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('success','User deleted successfully.');
    }
}
