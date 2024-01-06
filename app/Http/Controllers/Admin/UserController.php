<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{

    public function List()
    {
        $data['nav'] = "User";
        $data['users'] = DB::table('users')
            ->leftJoin('user_details', function ($join) {
                $join->on('users.id', '=', 'user_details.user_id');
            })->select('users.id', 'users.name', 'users.email', 'user_details.image', 'user_details.gender', 'user_details.phone', 'user_details.address')->where('role', 2)->orderBy('name', 'ASC')->get();

        return view('admin.user.list', $data);
    }
}
