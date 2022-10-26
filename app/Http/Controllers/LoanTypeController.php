<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanTypeController extends Controller
{
    public function list()
    {
        return view('backend.pages.loan_type');
    }
    
}
