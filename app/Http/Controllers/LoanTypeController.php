<?php

namespace App\Http\Controllers;

use App\Models\LoanType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class LoanTypeController extends Controller
{
    public function list()
    {
        
        // $loantypes_list=LoanType::all();
        $loantypes_list=LoanType::paginate(5);
        // dd($loantypes_list);
    
        return view('backend.pages.loan_types.loan_type',compact('loantypes_list'));
    }

public Function createform()
{
    return view ('backend.pages.loan_types.create_loantype');
}

public function loantypelist(Request $request)
{
    // dd($request-> all());
    $request->validate([
      'loan_name'=>'required|unique:loan_types,name',
     'picture'=>'required'
    ]);
    // dd($request-> all());
   $fileName=null;
   if($request->hasFile('picture'))
   {
    //    generate name
       $fileName=date('ymdhmi').'.'.$request->file('picture')->getClientOriginalExtension();
       $request->file('picture')->storeAs('/uploads',$fileName);

   }
    LoanType::create([
        'name'=>$request->loan_name,
        'description'=>$request->description,
        'image'=>$fileName,
        'status'=>$request->status
    ]);

    return redirect()-> back();
}

public function deleteloantype(string $loantype_id)
{
    $loantypes=LoanType::find($loantype_id);
         if($loantypes)
         {
            $loantypes->delete();
            notify()->success('Loan Types Deleted Successfully');
            return redirect()->back();

         }else
         {
           notify()->error('Loan Types Not Found');
            return redirect();
         }
}

public function viewloantype($loantype_id)
{
    $loantypes=LoanType::find($loantype_id);
    return view('backend.pages.loan_types.view_loantype',compact('loantypes'));
}

}
