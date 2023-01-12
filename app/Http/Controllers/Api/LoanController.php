<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function loans()
    {
        $loans=Loan::all();
        return response()->json([

            'success'=>true,
            'data'=>$loans,
            'message'=>'no data'

        ]);
    }
}
