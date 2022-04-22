<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:parente')->except('getLogin');
    }

    public function getLogin(){
        return view('front.login');
    }

    public function login(LoginRequest  $request)
    {
        if (Auth::guard('parente')->attempt(['email' => $request->email, 'password' => $request->password])) {

            if(Auth::guard('parente')->user()->email_verified_at != Null && Auth::guard('parente')->user()->is_active==1){
                Session::flash('statuscode', 'success');
                return redirect()->route('mainScreen')->with('success', 'Your email is verified successfully! you can now');
            }
            else{
                Session::flash('statuscode', 'error');
                return view('front.login')->with('status', ' Your email is verified successfully');
            }
        }

        Session::flash('statuscode', 'error');

        return redirect()->route('getLogin')->with('status', ' Invalid email or password, Please verify');
    }
}
