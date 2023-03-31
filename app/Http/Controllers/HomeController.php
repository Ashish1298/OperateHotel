<?php

namespace App\Http\Controllers;
use App\Models\Room;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $rooms = Room::where('status',0)->get();
        
        return view('user.home.index',compact('rooms'));
    }

    public function adminHome()
    {
        return view('admin.index');
    }
}
