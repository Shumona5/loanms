<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\LoanType;
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    public function list()
    {
       
        $criterialist=Criteria::with('loan_type_relation')-> paginate(5);
    //    dd($criterialist);
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

    public function delete(int $criteria_id)
    {
        $criteria=Criteria::find($criteria_id);
        if($criteria)
        {
            $criteria->delete();
            notify()->success('Criteria Deleted Successfully');
            return redirect()->back();
        } else
        {
            notify()->error('Criteria not Found');
            return redirect()->back();
        }
        
    }

    public function view(int $criteria_id)
    {
         $criteria=Criteria::find($criteria_id); 
        return view('backend.pages.criterias.view_criteria',compact('criteria'));
    }

    public function edit(int $criteria_id)
    {
        $criterias=Criteria::find($criteria_id);

        $loantypes=LoanType::all();

        return view('backend.pages.criterias.edit_criteria',compact('criterias','loantypes'));
    }

    public function update(Request $request, $criteria_id)
    {
          $criterias=Criteria::find($criteria_id);

          $criterias->update([

            'title'=>$request->criteria_name,
            'description'=>$request->description,
            'type_id'=>$request->loan_type_id,
            'status'=>$request->status
          ]);
        
          notify()->success('Criteria Updated Successfully');
          return redirect()->back();
    }
}
