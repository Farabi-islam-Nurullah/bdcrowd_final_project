<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
   
    public function dashbord(){
        return view('user.home');
    }
    public function editeprofile(){
        return view('user.editeprofile');
    }
}
