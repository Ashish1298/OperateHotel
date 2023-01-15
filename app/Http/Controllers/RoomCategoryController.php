<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;
use App\Models\RoomCategory;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Toastr;


class RoomCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomCategory = RoomCategory::all();
        return view('admin.Dashboard.roomCategory.index', compact('roomCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createRoomCategory()
    {
        return view('admin.Dashboard.roomCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRoomCategory(Request $request)

    {
      
        try {
            $request -> validate([
                'category_name'=> 'required',
                'description'=> 'required'
            ]);
            $roomCategory = new RoomCategory();

            if ($request->file('image')){
                $image_dest = 'admin/images/roomCategory/'.$roomCategory->image;
                if (File::exists($image_dest)){
                    File::delete($image_dest);
                }
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('admin/images/roomCategory/'), $filename);
                $roomCategory-> image = $filename;
            }
            $roomCategory->category_name = $request->category_name;
            $roomCategory->description = $request->description;
            $roomCategory->save();

            toastr()->success('Room Category created successfully!');
            return redirect()->route('roomCategory.index');

        } catch (Exception $exception) {
            toastr()->error('Error While Creating Room Category!');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }



    public function showRoomCategory($id)
    {
        $roomCategory = RoomCategory::find($id);
        
        return view('admin.Dashboard.roomCategory.edit',compact('roomCategory'));
    }


    public function updateRoomCategory(Request $request, $id)
    {
        try {
            $request -> validate([
                'category_name'=> 'required',
                'description'=> 'required'
            ]);
            $roomCategory = RoomCategory::find($id);

            if ($request->file('image')){
                $image_dest = 'admin/images/roomCategory/'.$roomCategory->image;
                if (File::exists($image_dest)){
                    File::delete($image_dest);
                }
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('admin/images/roomCategory/'), $filename);
                $roomCategory-> image = $filename;
            }
            $roomCategory->category_name = $request->category_name;
            $roomCategory->description = $request->description;
            $roomCategory->update();

            toastr()->success('Room Category edited successfully!');
            return redirect()->route('roomCategory.index');

        } catch (Exception $exception) {
            toastr()->error('Error While editing Room Category!');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }

    public function deleteRoomCategory($id)
    {
        $data = RoomCategory::find($id);
        $data->delete();
        return redirect()->back();
    }
}
