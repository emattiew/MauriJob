<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('dash-admin');
    }
     public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
}

