<?php

namespace App\Http\Controllers;

use App\Models\offer;

use Illuminate\Http\Request;

class UserOfferController extends Controller
{
    
    public function index()
    {
        $offers = Offer::all();
        return view('user.offers.index', compact('offers'));
    }
}
