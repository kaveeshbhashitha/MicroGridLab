<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRegiController extends Controller
{
    public function adminsystemusers(){
        $user = User::where('usertype', 'user')->get();
        return view('admin.system.systemuser')->with('user', $user);
    }

    public function create()
    {
        return view('admin.system.adduser');
    }

    public function store(Request $request)
    {
        try {
            if ($request->password != $request->password_confirmation) {
                return redirect()->back()->with('error', 'Password and confirm password do not match');
            }
            
            if (User::where('email', $request->email)->exists()) {
                return redirect()->back()->with('error', 'User with this email already exists');
            }
            
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8|confirmed',
            ]);

            User::create([
                'name' => $request->name, // Inserting the name field
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            
            return redirect()->back()->with('success', 'User added successfully');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'An error occurred: ' . $th->getMessage());
        }
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('adminsystemusers')->with('success', 'User deleted successfully');
    }

    public function show(){
        //
    }
}
