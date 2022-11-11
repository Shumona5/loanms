<?php

namespace App\Http\Controllers;

use App\Models\LoanType;
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
    return view ('backend.pages.loan_types.create_loantype');
}

public function loantypelist(Request $request)
{
    //dd($request-> all());
    LoanType::create([
        'name'=>$request->loan_name,
        'description'=>$request->description,
        'image'=>$request->status
    ]);

    return redirect()-> back();
}
    
}
