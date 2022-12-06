<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {                                     
        $apply_list=Apply::all();
        return view('backend.pages.admin.loan_appliers_list',compact('apply_list'));
    }

    public function viewLoanAppliers( int $appliers_id)
    {
        return view('backend.pages.admin.loan_appliers_form_view');
    }
}
