<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class BankController extends Controller
{
    public function bank()
    {

     // variable=Model name::all-method(); ....formula....
   //  $bank_list=Bank::all();
    $bank_list=User::where('role','bank')->paginate(5);
      // dd($bank_list);


    
       return view('backend.pages.banks.bank',compact('bank_list'));
    }

    public function createform()
   {
    return view('backend.pages.banks.create_bank');
   }

public function bankstore(Request $request)
{

//  dd($request->all());
   
   $request-> validate([
      'bank_name'=>'required',
     'bank_email'=>'required|unique:users,email'
  ]);

   $fileName=null;
   if($request->hasFile('bankLogo')){
      $fileName=date('ymdhi'). "." . $request->file('bankLogo')->getClientOriginalExtension();
   $request->file('bankLogo')->storeAs('/uploads',$fileName);

   }

    
 User::create([

      'name'=>$request->bank_name,
      'email'=>$request->bank_email,
      'role'=>'bank',
      'password'=>bcrypt('12345'),
      'image' =>$fileName,
      'contact'=>$request->contact,
      'address'=>$request->address,
      'status'=>$request->status

   ]);                                               

   notify()->success('Bank Created Successfully'); 
   return redirect()->back();

}

public function deleteBank(int $bank_id)
{      //dd($bank_id);
         $test=User::find($bank_id);
         if($test)
         {
            $test->delete();
            return redirect()->back()->with('message','bank deleted successfully');
         }else{
            return redirect()->back()->with('error','bank  not found');
         }
}
public function viewBank(int $bank_id)
{
   //dd($bank_id);
   $bank=User::find($bank_id);
    
   return view('backend.pages.banks.view',compact('bank'));
}

public function editBank($bank_id)
{
   $bank=User::find($bank_id);
   return view('backend.pages.banks.edit',compact('bank'));
}
    
public function update(Request $request,$bank_id)
{      //dd($request->all());
      $bank=User::find($bank_id);
      
      $fileName=$bank->logo;
      if($request->hasFile('bankLogo'))
      {
         $fileName=date('Ymdhmi').'.'.$request->file('bankLogo')->getClientOriginalExtension();
         $request->file('bankLogo')->storeAs ('/uploads', $fileName);
      }
      
      $bank->update([
         'name'=>$request->bank_name,
         'email'=>$request->bank_email,
         "image" =>$fileName,
         'contact'=>$request->contact,
         'address'=>$request->address,
         'status'=>$request->status 
      ]);
      return redirect()->route('bank')->with('message','Update Success');
}
}


