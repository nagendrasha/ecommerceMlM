<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginOTPController extends Controller
{

    public function OTPLoginPage()
    {

        return view('auth.otp_login');
    }
}
