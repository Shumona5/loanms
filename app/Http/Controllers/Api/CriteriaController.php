<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\criteria;
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    public function criteria()
    {
        $criteria=Criteria::all();
        return response()->json([

            'success'=>true,
            'data'=>$criteria,
            'message'=>'no data'
        ]);
    }
}
