<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserGalleryController extends Controller
{
    
    public function index()
    {
        return view('user.gallery.index');
    }
}
