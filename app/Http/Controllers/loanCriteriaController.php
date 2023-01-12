<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loanCriteriaController extends Controller
{
    public function list()
    {
        return view('backend.pages.loan_criteria');
    }
}
