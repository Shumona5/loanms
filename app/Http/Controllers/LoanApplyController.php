<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanApplyController extends Controller
{
    public function list()
    {
        return view('backend.pages.loanapply');
    }
}
