<?php

namespace App\Http\Controllers;
use App\Models\Room;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
