<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use App\Models\LoanType;
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


   
}
