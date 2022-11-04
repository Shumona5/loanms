<?php

namespace App\Http\Controllers;

use App\Models\LoanApply;
use Illuminate\Http\Request;

class LoanApplyController extends Controller
{
    public function list()

    {

     $loan_apply=LoanApply::all();
     
    //  dd($loan_apply);
        
        return view('backend.pages.loan_apply.loanapply',compact('loan_apply'));
    }

    public function createform()
    {
        return view('backend.pages.loan_apply.create_loanapply');
    }

    public function loanstore(Request $request)
    {
        // dd($request->all());

        LoanApply::create([
        'user_id'=>$request->user_id,
        'loan_id'=>$request->loan_id,
        'bank_id'=>$request->bank_id,
        'status'=>$request->status,
        'duration'=>$request->duration
    ]);
     return redirect()->back();
    }

}

