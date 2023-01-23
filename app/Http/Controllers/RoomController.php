<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomCategory;
use Illuminate\Support\Facades\File;

use Exception;


class RoomController extends Controller
{

    public function index()
    {
        $room = Room::all();
        return view('admin.Dashboard.room.index', compact('room'));
    }


    public function createRoom(Request $request)
    {
        $categorys = RoomCategory::all();
        return view('admin.Dashboard.room.create',compact('categorys'));
    }


    public function storeRoom(Request $request)
    {
        try {
            $request -> validate([
                
                'description'=> 'required',
                'price'=> 'required',
                'category'=> 'required',

            ]);
            $room = new Room();

            if ($request->file('image')){
                $image_dest = 'admin/images/room/'.$room->image;
                if (File::exists($image_dest)){
                    File::delete($image_dest);
                }
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('admin/images/room/'), $filename);
                $room-> image = $filename;
            }
            $room->room_name = $request-> room_name;
            $room->price = $request->price;
            $room->category = $request->category;
            $room->description = $request->description;
            $room->save();

            toastr()->success('Room created successfully!');
            return redirect()->route('profile.index');

        } catch (Exception $exception) {

            toastr()->error('Error While Creating Room !');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }


    public function showRoom($id)
    {
        $room = Room::find($id);
        $categorys = RoomCategory::all();
        return view('admin.Dashboard.room.edit',compact('room','categorys'));
    }

    public function updateRoom(Request $request, $id)
    {
        try {
            $request -> validate([
                'room_name'=> 'required',
                'description'=> 'required',
                'price'=> 'required'

            ]);
            $room = Room::find($id);

            if ($request->file('image')){
                $image_dest = 'admin/images/room/'.$room->image;
                if (File::exists($image_dest)){
                    File::delete($image_dest);
                }
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('admin/images/room/'), $filename);
                $room-> image = $filename;
            }

            $room->room_name = $request->room_name;
            $room->price = $request->price;
            $room->category = $request->category;
            $room->description = $request->description;
            $room->update();

            toastr()->success('Room updated successfully!');
            return redirect()->route('room.index');

        } catch (Exception $exception) {
            dd($exception);
            toastr()->error('Error While updating Room!');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }


    public function deleteRoom($id)
    {
        $data = Room::find($id);
        $image_dest = 'admin/images/room/' . $data->image;
        if (File::exists($image_dest)) {
            File::delete($image_dest);
        }
        $data->delete();
        toastr()->success('Room Deleted Successfully!!!');
        return redirect()->back();
    }
}
