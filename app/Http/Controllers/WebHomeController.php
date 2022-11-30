<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\LoanType;
use App\Models\User;
use Illuminate\Http\Request;

class WebHomeController extends Controller
{
    public function home()
    {

        $data=LoanType::all();
        $loans=Loan::all(); 
        
        // dd($loans);
        return view('frontend.pages.home',compact('data','loans'));

    }


    public function registration(Request $request)
    {
        //dd($request->all());

    $fileName=null;
   if($request->hasFile('image')){
      $fileName=date('ymdhi'). "." . $request->file('image')->getClientOriginalExtension();
   $request->file('image')->storeAs('/uploads',$fileName);

   }

          User::create([
              'name'=>$request->user_name,
              'email'=>$request->user_email,
              'password'=>bcrypt($request->password),
              'contact'=>$request->contact,
              'role'=>'user',
              'image'=>$fileName

          ]);

          notify()->success('User Registration Successfull.');
        return redirect()->back();
    }

    public function login(Request $request)
    {
        // dd($request->all());
        
           $credential=$request->except('_token');
             if(auth()->attempt($credential))
             {

                notify()->success('Login Success');
                  return redirect()->back();
             }

             notify()->error('Invalid Credentials.');
             return redirect()->back();
    }       
    
    public function logout()
    {
        auth()->logout();
        notify()->success('logout success');
        return redirect()->back();
    }
  }