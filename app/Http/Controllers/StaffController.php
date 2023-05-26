<?php

namespace App\Http\Controllers;

use App\Models\Order;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        
        return view('staff.index',compact('orders'));
    }
}
