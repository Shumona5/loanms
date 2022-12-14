<?php

namespace App\Http\Controllers;

use App\Models\FavouriteList;
use App\Models\WishList;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class FavouriteListController extends Controller
{
    public function list()
    {
        
        // $fav=FavouriteList::all();
        // dd($fav);
        $fav=WishList::paginate(6);
        
        return view('backend.pages.favourite_lists.fav_list',compact('fav'));
    }

     public function formcreate()
    {
    return view('backend.pages.favourite_lists.create_fav');
    }

    public function favStore(Request $request)
   {

    $request->validate(['loan_id'=>'required|unique:favourite_lists,loan_id']);
     
    //  dd($request->all());

    FavouriteList::create([
        'loan_seekers_name'=>$request->loan_seekers_name,
        'loan_id'=>$request->loan_id
    ]);

    return redirect()->back();


 }



}
