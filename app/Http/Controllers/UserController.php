<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Unique;

class UserController extends Controller
{
   public function login()
   {
       return view('backend.pages.login');
   }

    public function updatePassword()
    {
        return view('backend.pages.users.update-password');
   }

    public function updatePasswordSubmit(Request $request)
    {
       //validation
            $validate=Validator::make($request->all(),[
                'old_password'=>'required',
                'new_password'=>'required',
                'retype_password' => 'required|same:new_password',
            ]);
            if($validate->fails())
            {
                notify()->error($validate->getMessageBag());
                return redirect()->back();
            }

        //check old password matches
        if(Hash::check($request->old_password,auth()->user()->password)){
            //update new password
            $user=User::find(auth()->user()->id);
            $user->udpate([
               'password'=>bcrypt($request->new_password)
            ]);
            notify()->success('Password updated.');
        }else
        {
            notify()->error('Old Password not match.');
        }
        return redirect()->back();

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
            $user_list=User::where('role','user')-> paginate(5);
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

     public function deleteUser(int $user_id)
     {
        $user=User::find($user_id);
        if($user)
        {
            $user->delete();
            notify()->success('User Delete Successfully');
            return redirect()->back();
        }else
        {
           notify()->error('User Not Found');
            return redirect()->back();
        }

     }

     public function editUser(int $user_id)
     {
        $user=User::find($user_id);
        return view ('backend.pages.users.edit_user',compact('user'));
     }


     public function updateUser(Request $request, $user_id)
     {
        $user=User::find($user_id);
        $fileName=$user->image;
      if($request->hasFile('image'))
      {
        $fileName=date('Ymdhmi').'.'.$request->file('image');
        $request->file('image')->storeAs('/upload',$fileName);
      }

      $user->update([
        'name'=>$request->user_name,
        'image' =>$fileName,
        'contact'=>$request->contact,
        'address'=>$request->address,
        'status'=>$request->status
      ]);
    notify()->success('User Update Successfully');
      return redirect()->route('user');

     }


}
