<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LoanType;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoanTypeController extends Controller
{
    public function getloantype()
    {
        $loantype=LoanType::all();
        return response()->json([

            'success'=>true,
            'data'=>$loantype,
            'message'=>'no data'
        ]);
    }

    public function storeloantype(Request $request)
    {
        $validation= Validator::make($request->all(),[
            'loantype_name'=>'required',
            'picture'=>'required',
            'description'=>'required'
        ]);
         if($validation->fails())
         {
            return $this->responseWithError($validation->getMessageBag());
         }

        $fileName=null;
   if($request->hasFile('picture'))
   {
    //    generate name
       $fileName=date('ymdhmi').'.'.$request->file('picture')->getClientOriginalExtension();
       $request->file('picture')->storeAs('/uploads',$fileName);

   }
    $loantype=LoanType::create([
        'name'=>$request->loantype_name,
        'description'=>$request->description,
        'image'=>$fileName,
        // 'status'=>$request->status
    ]);
    
    return $this->responseWithSuccess($loantype,'LoanType Created Successfully');
    }

    public function viewloantype($id)
    {
        $loantype=LoanType::find($id);
        return $this->responseWithSuccess($loantype,'Single Loan Type View');
    }

    public function deleteloantype($id)
    {
        $loantype=LoanType::find($id);
        if($loantype) {
            $loantype->delete();
            return $this->responseWithSuccess(null,'Loan Type deleted Successfully');
        }
        return $this->responseWithError('No Data Found');
    }

    public function updateloantype(Request $request, $id)
    {
    //    dd($request->all());
        $loantype=LoanType::find($id);
        
        if($loantype){
        $loantype->update([    
        'name'=>$request->loantype_name,
        'description'=>$request->description,
        ]);

        return $this->responseWithSuccess($loantype,'Loan type Updated');
        }
        return $this->responseWithError('No data found to update.');
       

    }
}
