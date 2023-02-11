<?php

namespace App\Http\Controllers;
use App\Models\room;
use Illuminate\Http\Request;

class UserRoomController extends Controller
{
   
    public function index()
    {
        $rooms=Room::all();
        return view('user.room.index',compact('rooms'));
    }

}