<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\LoanType;
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    public function list()
    {
       $criterialist=Criteria::paginate(5);
       
        return view('backend.pages.criterias.criteria',compact('criterialist'));
    }

    public function criteriaList()
    {
        
        $loantype=LoanType::all();

        // dd($loantype);
        
        return view('backend.pages.criterias.criteria_create',compact('loantype'));
    }

    public function criteriaStore(Request $request)
    {
            //  dd($request->all());
            Criteria::create([
            'title'=>$request->criteria_name,
            'description'=>$request->description,
            'type_id'=>$request->loan_type_id,
            'status'=>$request->status
        ]);
         notify()->success('Criteria Created successfully');
        return redirect()->back();

    }
}
