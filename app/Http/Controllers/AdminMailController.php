<?php

namespace App\Http\Controllers;

use App\Mail\AdminToUsersMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class AdminMailController extends Controller
{
    // admin mail page function
    public function mailSend(Request $request)
    {
        // dd($request->all());

        $mailData = [
            'subject' => $request->subject,
            'message' => $request->message,
            'admin_email' => User::where('is_admin', 1)->get('email')->first()->email,
        ];

        $bulkmails = User::where('is_admin', 0)->get('email');


        $email_arr = array();
        for ($i = 0; $i < count($bulkmails); $i++) {
            $email = $bulkmails[$i]['email'];
            array_push($email_arr, $email);
        }

        Mail::to($email)->cc($email_arr)->send(new AdminToUsersMail($mailData));
        return redirect()->back()->with('success', 'Mail send successfully');
    }
}
