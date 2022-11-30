<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Unique;

class UserController extends Controller
{
   public function login()
   {
       return view('backend.pages.login');
   }
   
public function store(Request $request)
{
        //  dd($request-> all());
      
     $loginInfo=$request->except('_token');
     if(Auth::attempt($loginInfo))
     {
        if(auth()->user()->role=='user')
             {
                   return redirect()->route('user.home');
              }
        return redirect()->route('dashboard');
     }
     return redirect()->back()->with('message','Invalid LoginInfo');
}

public function user()
    {
        
        // $user_list=User::all();
            $user_list=User::paginate(5);
        return view('backend.pages.users.loan_seeker',compact('user_list'));
    }
    

    
    

    public function logout()
    {
        Auth::logout();
        return redirect()->back()->with('message','logout Successful');
    }

    public function viewUser(int $user_id)
    {
        return view('backend.pages.users.viewuser');
    }

     public function deleteUser()
     {
        
     }
}
