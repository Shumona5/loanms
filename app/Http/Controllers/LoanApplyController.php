<?php

namespace App\Http\Controllers;

use App\Models\Apply;

use Illuminate\Http\Request;

class LoanApplyController extends Controller
{
                          

    public function list()
    {                                     
        $apply_list=Apply::with('loanRelation')->orderBy('id','DESC')->get();
        // dd($apply_list);
        return view('backend.pages.loan_apply.loan_appliers_list',compact('apply_list'));
    }

    public function viewLoanAppliers( int $appliers_id)
    {
        $apply_list=Apply::find($appliers_id);
        return view('backend.pages.loan_apply.loan_appliers_form_view',compact('apply_list'));
    }

    public function createform()
    {
        return view('backend.pages.loan_apply.create_loanapply');
    }

    public function loanstore(Request $request)
    {
        // dd($request->all());

        Apply::create([
        'user_id'=>1,
        'loan_id'=>1,
        'bank_id'=>$request->bank_id,
        'status'=>$request->status,
        'duration'=>$request->duration
    ]);
     return redirect()->back();
    }

    public function loanAccept(int $loanappliers_id)
    {
        $loanappliersInfo=Apply::find($loanappliers_id);

    $loanappliersInfo->update([

    'status'=>'Accepted'
    
    ]);
     notify()->success('Loan Appliers Information Accepted Successfully');
    return redirect()->back();
    }

    public function loanReject(int $loanappliers_id)
    {
        $appliersInfo=Apply::find($loanappliers_id);
        $appliersInfo->update([

        'status'=>'Reject'
        ]);
        notify()->success('Loan Appliers Rejected Successfully');
        return redirect()->back();

    }
    
     public function deleteLoanAppliers(int $appliers_id)
     {
         $loanappliers=Apply::find($appliers_id);
         if($loanappliers)
         {
            $loanappliers->delete();
            notify()->success('Loan Appliers Information Deleted Successfully');
            return redirect()->back();
         }else
         {
            notify()->error('Loan Information Not Found');
            return redirect()->back();
         }
     }

  public function editLoanAppliers(int $appliers_id)
  {
    $loanappliers=Apply::find($appliers_id);
    return view('backend.pages.loan_apply.edit_loanapply',compact('loanappliers'));
  }

  public function updateAppliers(Request $request, $appliers_id)
  {
    $loanappliers=Apply::find($appliers_id);
    $loanappliers->update([

    ]);
  }

}

