<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;

class UserDashboardController extends Controller
{
    public function Dashboard(Request $request)
    {
        $data['myDetail'] = DB::table('users')
        ->leftJoin('user_details', function ($join) {
            $join->on('users.id', '=', 'user_details.user_id');
        })->select('users.id', 'users.name', 'users.email', 'user_details.image', 
        'user_details.gender', 'user_details.phone', 'user_details.address')
        ->where('users.id',Auth::User()->id)->first();

        return view('Front.user.dashboard',$data);
    }
}
