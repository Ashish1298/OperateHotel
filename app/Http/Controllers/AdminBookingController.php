<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Exception;
use App\Models\User;
use App\Models\Order;
use App\Models\Room;
use App\Models\food;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class AdminBookingController extends Controller
{
    
    public function index()
    {

        $bookings = Booking::all();
        return view('admin.Dashboard.booking.index',compact('bookings'));
    }

    
    public function createAdminBooking()
    {
        $rooms = Room::All();
        $users = User::all();
        return view('admin.Dashboard.booking.create', compact('rooms','users'));
    }

    public function storeAdminBooking(Request $request)
    {
        try {
            $request -> validate([
                
                'checkIn'=> 'required',
                'checkOut'=> 'required',
                'room_id'=> 'required',
                'phone'=> 'required',


            ]);
            $bookings = new Booking();
            $bookings->checkIn = $request-> checkIn;
            $bookings->checkOut = $request-> checkOut;
            $bookings->room_id = $request->room_id;
            $bookings->phone = $request->phone;
            $bookings->user_id = auth()->user()->id;
            $bookings->save();

            toastr()->success('Booking created Successfully!');
            return redirect()->route('booking.index');

        } catch (Exception $exception) {
            
            toastr()->error('Error While Booking Room !');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }

   
    public function deleteAdminBooking($id)
    {
        $data = Booking::find($id);
        $data->delete();
        toastr()->success('Booking Deleted Successfully!!!');
        return redirect()->back();
    }


}
