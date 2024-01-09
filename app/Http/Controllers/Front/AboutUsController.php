<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AboutUsController extends Controller
{
    public function Index()
    {
        $data['about_us'] = DB::table('abouts')->where(['id'=>1])->get();
        return view('Front.aboutus', $data);
    }
}
