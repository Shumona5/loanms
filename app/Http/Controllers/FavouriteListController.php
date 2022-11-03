<?php

namespace App\Http\Controllers;

use App\Models\FavouriteList;
use Illuminate\Http\Request;

class FavouriteListController extends Controller
{
    public function list()
    {
        
        $fav=FavouriteList::all();
        // dd($fav);
        
        
        return view('backend.pages.favourite_lists.fav_list', compact('fav'));
    }

     public function formcreate()
    {
    return view('backend.pages.favourite_lists.create_fav');
    }

    public function favStore(Request $request)
   {


    // dd($request->all());

    FavouriteList::create([
        'loan_seekers_name'=>$request->loan_seekers_name,
        'loan_id'=>$request->loan_id
    ]);

    return redirect()->back();


 }



}
