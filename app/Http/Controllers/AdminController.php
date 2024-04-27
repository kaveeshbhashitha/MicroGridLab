<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //main pages
    public function adminnews(){
        return view('admin.news');
    }
    public function adminpeople(){
        return view('admin.people');
    }


    //system users

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('adminsystemusers')->with('success', 'User deleted successfully');
    }

    public function create()
    {
        return view('admin.system.adduser');
    }
}
