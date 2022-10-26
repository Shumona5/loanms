<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('backend.pages.dashboard');
    }

    public function table()
    {
        return view('backend.pages.table');
    }

    public function aboutus()
    {
        return view('backend.pages.aboutus');
    }


    public function contact()
    {
        return view('backend.pages.contact');
    }


}
