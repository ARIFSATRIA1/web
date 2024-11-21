<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index() {
        return view('home.home', ['title' => "Home"]);
    }

    public function login() {
        return view('login.login');
    }

    public function register() {
        return view('register.register');
    }
}
