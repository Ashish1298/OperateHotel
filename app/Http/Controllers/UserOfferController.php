<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserOfferController extends Controller
{
    
    public function index()
    {
        return view('user.offers.index');
    }
}
