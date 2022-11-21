<?php

namespace App\Http\Controllers;

use App\Models\LoanType;
use Illuminate\Http\Request;

class WebHomeController extends Controller
{
    public function home()
    {

        $data=LoanType::all();
        // dd($data);
        return view('frontend.pages.home',compact('data'));
    }
}
