<?php

namespace App\Http\Controllers;

use App\Models\Apply;

use App\Models\LoanType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
    public function reports()
    {
        $types=LoanType::all();
        $from=date('Y-m-d');
        $to=date('Y-m-d');
        return view('backend.pages.reports',compact('types','from','to'));
    }

    public function reportGenerate(Request $request)
    {

       $report= Validator::make($request->all(),[
          'from_date' => 'required|date',
           'to_date'=> 'required|date|after:from_date',
    ]);

    if($report->fails())
    {
        notify()->error('From date and to date required and to should greater than from date');
        return redirect()->back();
    }

     $from=$request->from_date;
     $to=$request->to_date;
     $type_id=$request->type;

     if($type_id) //scenario 1
     {
         $appliers=Apply::whereHas('loanRelation',function ($query) use ($type_id){
             $query->where('type_id',$type_id);
         })->with('loanRelation.loantype')->whereBetween('created_at',[$from,$to])->get();

     }else //scenario 2
     {
         $appliers=Apply::with(['loanRelation','loanRelation.loantype'])
             ->whereBetween('created_at',[$from,$to])->get();
     }

     $types=LoanType::all();
     return view('backend.pages.reports',compact('appliers','types','from','to'));
    }
}

