<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }
    public function info()
    {
        return view('info');
    }
    public function contact()
    {
        return view('contact');
    }
}
