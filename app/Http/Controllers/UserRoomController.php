<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRoomController extends Controller
{
   
    public function index()
    {
        return view('user.room.index');
    }

}