<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavouriteListController extends Controller
{
    public function list()
    {
        return view('backend.pages.fav_list');
    }
}
