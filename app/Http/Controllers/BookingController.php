<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Exception;
use Brian2694\Toastr\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BookingController extends Controller
{


    
    public function storeBooking(Request $request)
    {
        try {
            $request -> validate([
                
                'checkIn'=> 'required',
                'checkOut'=> 'required',
                'room_id'=> 'required',
                'noOfPeople'=> 'required',

            ]);
            $bookings = new Booking();
            $bookings->checkIn = $request-> checkIn;
            $bookings->checkOut = $request-> checkOut;
            $bookings->room_id = $request->room_id;
            $bookings->noOfPeople = $request->noOfPeople;
            $bookings->user_id = auth()->user()->id;
            $bookings->save();

            toastr()->success('Booking Done Successfully!');
            return redirect()->back();

        } catch (Exception $exception) {
            dd($exception);
            toastr()->error('Error While Booking Room !');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }

    
    public function showBooking()
    {
        $bookings = Booking::all();
        return view('user.booking.index',compact('bookings'));
    }

    
    public function deleteBooking(Request $request, $id)
    {
        $data = Booking::find($id);
        $data->delete();
        toastr()->success('Service Deleted Successfully!!!');
        return redirect()->back();
    }
}
