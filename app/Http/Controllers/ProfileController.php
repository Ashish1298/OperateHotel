<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use Exception;
use App\Models\User;

class ProfileController extends Controller
{
    public function index() 
    {
        return view('admin.Dashboard.profile.index');
    }


    public function createProfile()
    {
        return view('admin.Dashboard.profile.create');
    }

    public function storeProfile(Request $request) 
    {
        try {
            $request -> validate([
                
                'phone_number'=> 'required|numeric|min:10',
                'bio'=> 'required',
                'dateOfBirth'=> 'required',

            ]);
            $profile = new Profile();

            if ($request->file('image')){
                $image_dest = 'admin/images/profile/'.$profile->image;
                if (File::exists($image_dest)){
                    File::delete($image_dest);
                }
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('admin/images/profile/'), $filename);
                $profile-> image = $filename;
            }
            $profile->bio = $request-> bio;
            $profile->phone_number = $request->phone_number;
            $profile->user_id = Auth::user()->id;
            $profile->dateOfBirth = $request->dateOfBirth;
            $profile->save();

            toastr()->success('Profile edited successfully!');
            return redirect()->route('profile.index');

        } catch (Exception $exception) {
            dd($exception);
            toastr()->error('Error While Editing Profile !');
            return redirect()->back()->with('error', 'This is the error' . $exception);
        }
    }


    // public function index() 
    // {

    // }

    // public function index() 
    // {

    // }

    // public function index() 
    // {

    // }

    // public function index() 
    // {

    // }

    
}
