<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        $user=User::all();
        return response()->json([

            'success'=>true,
            'data'=>$user,
            'message'=>'no data'

        ]);

    }
}
