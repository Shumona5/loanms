<?php

namespace App\Http\Controllers;

use App\Models\Apply;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
    public function reports()
    {
        return view('backend.pages.reports');
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

     $appliers=Apply::with('loanRelation')->whereBetween('created_at',[$from,$to])->get();

     return view('backend.pages.reports',compact('appliers'));
    }
}

