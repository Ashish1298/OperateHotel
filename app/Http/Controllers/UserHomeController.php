<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Map;
use App\Models\User;
use App\Models\Room;
use Exception;
use Brian2694\Toastr\Toastr;
use Illuminate\Support\Facades\Auth;


class UserHomeController extends Controller
{
    
    public function index()
    {
        $rooms = Room::all();
        return view('user.home.index',compact('rooms'));
    }

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


    public function nearestPlace(){
        $maps = Map::all();
        return view('user.map.index',compact('maps'));
    }
    public function nearestPlaceMap($id){
        $map = Map::find($id);
        return view('user.map.show',compact('map'));
    }

}