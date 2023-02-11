<?php

namespace App\Http\Controllers;
use App\Models\room;
use Illuminate\Http\Request;

class UserGalleryController extends Controller
{
    
    public function index()
    {
        $rooms = Room::all();
        return view('user.gallery.index', compact('rooms'));
    }
}
