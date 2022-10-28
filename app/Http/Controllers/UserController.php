<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        return view('backend.pages.users.loan_seeker');
    }
    
    public function createform()
    {
        return view('backend.pages.users.create');
    }
}
