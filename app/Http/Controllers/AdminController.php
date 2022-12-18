<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {                                     
       $admin_list=User::where('role','admin')->get();

       return view('backend.pages.admin.admins',compact('admin_list'));
    }


   
}
