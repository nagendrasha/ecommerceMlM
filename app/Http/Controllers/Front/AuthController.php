<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function LoginPage()
    {
        return view('Front.login');
    }

    public function RegisterPage()
    {
        return view('Front.register');
    }

}
