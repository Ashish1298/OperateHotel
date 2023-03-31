<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ManageUserController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        return view('admin.Dashboard.user.index', compact('users'));
    }

    
    public function delete($id)
    {
        //
    }


    public function makeStaff($id){
        $user = User::find($id);
        $user->isStaff = 1;
        $user->update();
        toastr()->success('User is Sucessfully Made to Staff !!');
        return redirect()->back();
    }
}
