<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //function for authentication navigation
    public function index(){
        if (Auth::user() -> usertype == 'user') {
            return view('user.home');
        }elseif (Auth::user() -> usertype == 'admin') {
            return view('admin.home');
        }else{
            return view('error');
        }
    }
    
    public function user()
    {
        // Fetch users from the database
        $users = User::all();

        // Pass the $users variable to your view
        return view('admin.users', compact('users'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }

}
