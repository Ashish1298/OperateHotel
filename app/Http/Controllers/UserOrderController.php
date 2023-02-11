<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;

class UserOrderController extends Controller
{
    
    public function index()
    {
        $foods = Food::all();
        return view('user.order.index', compact('foods'));
    }

}
