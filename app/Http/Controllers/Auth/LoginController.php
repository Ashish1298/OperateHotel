<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Brian2694\Toastr\ToastrServiceProvider;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    

    use AuthenticatesUsers;
    protected $redirectTo = RouteServiceProvider::HOME;
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->is_admin == 1) {
                toastr()->success('Log in successfully!');
                return redirect()->route('admin.home');
            }
            if (auth()->user()->isStaff == 1) {
                toastr()->success('Log in successfully!');
                return redirect()->route('staff.dashboard');
            } else {
                toastr()->success('Log in successfully!');
                return redirect('home');
            }
        } else {
            toastr()->error('Error While Logging in!');
            return redirect()->route('login')->with('error', 'Input proper email or password');
        }
    }
}
