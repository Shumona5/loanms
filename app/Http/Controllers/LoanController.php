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

        $filename=null;
        if($request->hasFile('image'))
        {
          $filename=date('Ymdhsi').'.'.$request->file('image')->getClientOriginalExtension();
          $request->file('image')->storeAs('/uploads',$filename);
        }

      Loan::create([
        'title'=>$request->loan_title,
        'status'=>$request->status,
        'type_id'=>$request->loan_type_id,
        'bank_id'=>auth()->user()->id,       
        'loan_amount'=>$request->loan_amount,
        'image'=>$filename,
        'number_of_months'=>$request->number_of_months

      ]);

      return redirect()->back();
    }

    public function viewloan(int $loan_id)
    {
      // dd($loan_id);
      $loan=loan::find($loan_id);
      return view('backend.pages.loans.view_loan',compact('loan'));
    }
    
    public function deleteloan(int $loan_id)
    {
      
        //  dd($loan_id);
        $details=loan::find('$loan_id');
        if($details)
        {
          $details->delete;
          notify()->success('Loan deleted Successfully.');
          return redirect()->back();
        }
        else{
          notify()->Error('Loan not Found');
          return redirect();
        }
    }
}
