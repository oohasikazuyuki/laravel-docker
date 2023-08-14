<?php

namespace App\Http\Controllers;

class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function __construct()
    {
        $this->middleware('auth.user');
    }
}
