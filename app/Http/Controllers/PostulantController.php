<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostulantController extends Controller
{
    public function register()
    {
        return view('register-p');
    }
    public function login()
    {
        return view('login-p');
    }
  
  
}
