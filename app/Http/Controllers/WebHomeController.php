<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\Loan;
use App\Models\LoanType;
use App\Models\User;
use App\Models\WishList;
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
        // dd($request->all());

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
              'about'=>$request->about,
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

    public function profile()
    {
       
    //    I want to get all applications of this user. 
        $userApplications=Apply::with('loanRelation')->where('user_id',auth()->user()->id)->get();
        //  dd($userApplications);
        $favouritelist=WishList::with(['seekerRelation','loanRelation'])->where('loan_seekers_id',auth()->user()->id)->get();
            // dd($favouritelist);


        return view('frontend.pages.profile',compact('userApplications','favouritelist'));
    }
      

    public function cancel(int $profile_id)
    {
        $profileInfo=Apply::find($profile_id);
        $profileInfo->update([
            'status'=>'cancel'
        ]);
        notify()->success('Status Cancel successfully');
        return redirect()->back();
    }


    public function edit(int $application_id)
    {
        $application=Apply::find($application_id);
        return view('frontend.pages.application_edit',compact('application'));
    }

    public function update(Request $request ,int $profile_id)
    {
        $profile=Apply::find($profile_id);
        $profile->update([
            
        ]);

    }
  }                 