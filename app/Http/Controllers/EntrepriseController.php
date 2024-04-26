<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function register()
    {
        return view('register-e');
    }
    public function login()
    {
        return view('login-e');
    }
}
