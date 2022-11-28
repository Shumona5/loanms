<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function list()
    {
        
        return view('frontend.pages.featured_loan');
    }


    public function findloan()
    {
        return view('frontend.pages.findloan');
    }
}
