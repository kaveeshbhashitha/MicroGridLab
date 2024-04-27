<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //main navigations
    public function addnews(){
        return view('user.newsadd');
    }
    public function addpublication(){
        return view('user.publicationadd');
    }
    public function addresearch(){
        return view('user.researchadd');
    }
    public function addproject(){
        return view('user.project');
    }
    public function addcourse(){
        return view('user.course');
    }

    //user people navigation
    public function userpeoplecoordinator(){
        return view('user.people.coordinator');
    }
    public function userpeopleinternational(){
        return view('user.people.international');
    }
    public function userpeoplepostgraduate(){
        return view('user.people.postgraduate');
    }
    public function userpeoplestaff(){
        return view('user.people.staff');
    }
}
