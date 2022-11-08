<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class LoanTypeController extends Controller
{
    public function list()
    {
        return view('backend.pages.loan_types.loan_type');
    }

public Function createform()
{
    return view ('backend.pages.loan_types.create');
}


    
}
