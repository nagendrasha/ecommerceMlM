<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{

    public function Index()
    {
        $data['sliders'] = DB::table('sliders')->where(['status'=>1, 'deleted'=>0])->orderBy('sort','ASC')->get();
        $data['col_four'] = DB::table('banners')->where(['status'=>1, 'category'=>4 ,'deleted'=>0])->orderBy('sort','ASC')->get();
        $data['col_twelve'] = DB::table('banners')->where(['status'=>1, 'category'=>12 ,'deleted'=>0])->orderBy('sort','ASC')->get();
        $data['col_six'] = DB::table('banners')->where(['status'=>1, 'category'=>12 ,'deleted'=>0])->orderBy('sort','ASC')->get();
        $data['services'] = DB::table('services')->where(['status'=>1, 'deleted'=>0])->orderBy('sort','ASC')->get();
        $data['taglines'] = DB::table('taglines')->where(['status'=>1, 'deleted'=>0])->orderBy('sort','ASC')->get();
        $data['brands'] = DB::table('brands')->get();
        
        // print_r($data['sliders']);
        // die;
        return view('Front.index', $data);
    }

    
}
