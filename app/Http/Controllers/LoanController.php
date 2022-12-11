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
      $loan_list=Loan::with(['loantype','bank'])->paginate(3);

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
        'details'=>$request->details,
        'type_id'=>$request->loan_type_id,
        'bank_id'=>auth()->user()->id,       
        'loan_amount'=>$request->loan_amount,
        'interest'=>$request->interest,
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
    
    public function deleteloan($loan_id)
    {
      
      $details=loan::find($loan_id);
      //  dd($details);
        if($details)
        {
          $details->delete();
          notify()->success('Loan deleted Successfully.');
          return redirect()->back();
        }
        else
        {
          notify()->Error('Loan not Found');
          return redirect();
        }
    }


    public function editloan($loan_id)
    {
      // dd($loan_id);    
        $loan=Loan::find($loan_id);  
        $loan_types=LoanType::all();  
        return view('backend.pages.loans.edit_loan',compact('loan','loan_types'));
    }

    public function updateLoan(Request $request, $loan_id)
    {                                                             
          // dd($request->all()); 
          $loan=Loan::find($loan_id);
          $loan->update([
          'title'=>$request->loan_title,
          'loan_amount'=>$request->loan_amount
        ]);
         notify()->success(' Loan Update Successfully'); 
        return redirect()->route('loan');
}            
}