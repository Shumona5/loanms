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
    

    public function createform()
    {
        return view('backend.pages.users.create');
    }


    public function userstore(Request $request)
    {
        // dd($request ->all());
        

        User::create([
            'name'=>$request->user_name,
            'email'=>$request->user_mail,
            'password'=>$request->password,
            'image'=>$request->image,
            'status'=>$request->status,
            'contact'=>$request->contact,
            'address'=>$request->address
        ]);

        return redirect()->back();
    }
}
