<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class UserAboutController extends Controller
{
    
    public function index()
    {
        $abouts = About::first();
        return view('user.about.index', compact('abouts'));
    }

}