<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use App\Models\criteria;
use App\Models\Loan;
use App\Models\WishList;
use Illuminate\Http\Request;

class LoanController extends Controller
{                                                        
    public function list(Request $request)                    
    {                                                           
        //  dd($request->all());                                         
        //  if($request->amount )

     $loans=Loan::with(['loantype','bank'])->where('type_id',$request->type_id)->get();   
      
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
        //    dd($loan);
        // $loan=Loan::with(['loantype','loantype.criteriaRel'])->find($loan_id); 
        $loan=Loan::with('loantype')->find($loan_id); 

        $criterias=criteria::where('type_id',$loan->type_id)->get();
        
        return view('frontend.pages.viewNow',compact('loan','criterias'));
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
   
public function addWishList(int $loan_id)
{
        //    dd($loan_id);
        WishList::create([

         'loan_seekers_id'=>auth()->user()->id,
         'loan_id'=>$loan_id
        ]); 

       notify()->success('Loan Added to Your Wish List ');
        return redirect()->back();
}         


}
