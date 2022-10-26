<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    public function list()
    {
        return view('backend.pages.criteria');
    }
}
