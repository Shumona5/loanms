<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\LoanType;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $loan=Loan::all()->count();
        $loanTypes=LoanType::all()->count();
        $loanSeekers=User::where('role','user')->get()->count();
        $banks=User::where('role','bank')->get()->count();
        return view('backend.pages.dashboard',compact('loan','loanTypes','loanSeekers','banks'));
    }


}
 