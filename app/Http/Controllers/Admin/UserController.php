<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function List()
    {
        $data['nav'] = "User";
        return view('admin.user.list', $data);
    }


    
}
