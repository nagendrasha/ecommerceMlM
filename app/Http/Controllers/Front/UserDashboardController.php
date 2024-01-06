<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class UserDashboardController extends Controller
{
    public function Dashboard(Request $request)
    {
        return view('Front.user.dashboard');
    }
}
