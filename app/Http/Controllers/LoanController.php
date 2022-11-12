<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\LoanType;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function loan()
    {
        
      // $loan_list=Loan::all();
      // dd($loan_list);
      $loan_list=Loan::paginate(3);
      
      return view('backend.pages.loans.loan',compact('loan_list'));
    }

    public function createform()
    {
       
        $loan_types=LoanType::all();
        // dd($loan_types);
        return view('backend.pages.loans.create_loan',compact('loan_types'));
    }

    public function loanStore(Request $request)
    {
        // dd($request ->all());


      Loan::create([
        'title'=>$request->loan_title,
        'status'=>$request->status,
        'type_id'=>$request->loan_type_id,
        'bank_id'=>1,
        'loan_amount'=>$request->loan_amount,
        'number_of_months'=>$request->number_of_months

      ]);

      return redirect()->back();
    }

    
    
}
