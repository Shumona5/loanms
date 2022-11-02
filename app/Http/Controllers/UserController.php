<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        return view('backend.pages.users.loan_seeker');
     }
    

public function userStore(Request $request)
{
//    dd($request->all());
  User::create([
   // column name= input field name
   'name'=>$request->user_name,
   'email'=>$request->user_mail,
   'password'=>'12345'
 ]);

 return redirect()-> back();
   
}

 public function createform()
    {
        return view('backend.pages.users.create');
    }
}
