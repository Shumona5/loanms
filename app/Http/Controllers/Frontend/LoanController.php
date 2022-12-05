<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{                                                        
    public function list(Request $request)                    
    {                                                           
        //  dd($request->all());                                         
        //  if($request->amount )

     $loans=Loan::where('type_id',$request->type_id)->get();      
        return view('frontend.pages.featured_loan',compact('loans'));         
    }
                   

    public function findloan()
    {
        $loans=Loan::all() ; 
        // dd($loans);          
        return view('frontend.pages.findloan',compact('loans'));
    }

    public function view($loan_id)
    {
        // dd($loan_id);
        $loan=Loan::find($loan_id); 
       
        
        return view('frontend.pages.viewNow',compact('loan'));
    }

    public function applyNow(int $loan_id)  
    {
        // dd("dsfasfs");
        return view('frontend.pages.applynow',compact('loan_id'));
    }

    public function applyNowForm(Request $request, $loan_id)
    {
        //  dd($loan_id); 
        
        
        Apply::create([
            'loan_id'=>$loan_id,
            'user_id'=>auth()->user()->id,
            'name'=>$request->name,                                      
            'birth_date'=>$request->birth_date,
            'marital_status'=>$request->marital_status,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'address'=>$request->address,
            'living_duration'=>$request->living_duration,
            'company_name'=>$request->company,
            'designation'=>$request->designation,
            'years_of_experience'=>$request->experience,
            'gross_monthly_income'=>$request->monthly_income,

           ]);
           notify()->success('Loan Applied Successfully');
           return redirect()->back();
    }
   
}
