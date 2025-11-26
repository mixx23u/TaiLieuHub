<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('home.index');
    }

    public function explore()
    {
        return view('home.explore');
    }

    
    public function uploadDocument()
    {
        return view('user.upload-document');
    }

    public function login()
    {
        return view('user.login');
    }

    public function register()
    {
        return view('user.register');
    }

    public function payment()
    {
        return view('user.payment');
    }

}
