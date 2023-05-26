<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ManageUserController extends Controller
{

    public function index()
    {
        $users = User::where('is_admin', 0)->where('isStaff', 0)->get();
        return view('admin.Dashboard.user.index', compact('users'));
    }


    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        toastr()->success("User Deleted Successfully");
        return redirect()->back();
    }


    public function makeStaff($id)
    {
        $user = User::find($id);
        $user->isStaff = 1;
        $user->update();
        toastr()->success('User is Sucessfully Made to Staff !!');
        return redirect()->back();
    }
}
