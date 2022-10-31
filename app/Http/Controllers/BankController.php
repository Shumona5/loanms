<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function bank()
    {
       $bank_list=Bank::all();
       //dd($bank_list);
       
        return view('backend.pages.bank',compact('bank_list'));
    }
}
