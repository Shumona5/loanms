<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class UserController extends Controller
{
    public function user()
    {
        
        // $user_list=User::all();
            $user_list=User::paginate(5);
        return view('backend.pages.users.loan_seeker',compact('user_list'));
     }
    

    public function createform()
    {
        return view('backend.pages.users.create');
    }


    public function userstore(Request $request)
    {
        // dd($request ->all());
        $request->validate([
           'user_name'=>'required',
            'user_mail'=>'required|unique:users,email',
            'image'=>'required'
        ]);

        $fileName=null;
        if($request->hasFile('image'))
        {
         //    generate name
            $fileName=date('ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
     
        }

        User::create([
            'name'=>$request->user_name,
            'email'=>$request->user_mail,
            'password'=>$request->password,
            'image'=>$fileName,
            'status'=>$request->status,
            'contact'=>$request->contact,
            'address'=>$request->address
        ]);

        return redirect()->back();
    }
}
