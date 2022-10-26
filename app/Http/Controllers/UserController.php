<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        return view('backend.pages.loan_seeker');
    }
    public function create(){
        return view('backend.pages.userform');
    }
}
