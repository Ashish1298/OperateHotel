<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Order;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $rooms = Room::where('status', 0)->get();

        return view('user.home.index', compact('rooms'));
    }

    public function adminHome()
    {
        $total_no_of_customer = User::where('is_admin', 0)->where('isStaff', 0)->count();
        $total_no_of_order = Order::count();
        $total_no_of_room = Room::count();
        $total_no_of_booking = Booking::count();

        $all_rooms = Room::all();
        $all_bookings = Booking::all();

        // Rooms status
        $available_rooms = Room::where('status', 0)->count();
        $booked_rooms = Room::where('status', 1)->count();



        return view('admin.index', compact(
            'total_no_of_customer',
            'total_no_of_order',
            'total_no_of_room',
            'total_no_of_booking',
            'all_rooms',
            'all_bookings',
            'available_rooms',
            'booked_rooms'

        ));
    }
}
