<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class BankController extends Controller
{
    public function bank()
    {



      // variable=Model name::all-method(); ....formula....
   //  $bank_list=Bank::all();
    $bank_list=Bank::paginate(5);
      // dd($bank_list);


    
       return view('backend.pages.banks.bank',compact('bank_list'));
    }

    public function createform()
   {
    return view('backend.pages.banks.create_bank');
   }

public function bankstore(Request $request)
{
  //dd($request->all());

   $request-> validate([
      'bank_name'=>'required|unique:banks,name',
      'bank_email'=>'required|unique:banks,email'
   ]);



 Bank::create([

      'name'=>$request->bank_name,
      'email'=>$request->bank_email,
      "logo" =>$request->bankLogo,
      'contact'=>$request->contact,
      'address'=>$request->address,
      'status'=>$request->status

   ]);

   return redirect()->back();

}


}
