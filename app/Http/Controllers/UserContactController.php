<?php

namespace App\Http\Controllers;

use App\Mail\UserToAdminMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserContactController extends Controller
{

    public function index()
    {
        return view('user.contact.index');
    }

    public function userToAdmin(Request $request)
    {
        $admin_email = User::where('is_admin', 1)->get('email')->first()->email;

        $mailData = [
            'name' => $request->name,
            'message' => $request->message,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
        ];

        Mail::to('ashishpuri1298@gmail.com')->send(new UserToAdminMail($mailData));

        // dd($request->all());
        return redirect()->back()->with('success', 'Your message has been sent.');
    }
}
