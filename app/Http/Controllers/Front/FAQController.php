<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class FAQController extends Controller
{
    public function Index()
    {
        $data['faqs'] = DB::table('faqs')->where(['status'=>1,'deleted'=>0])->orderBy('sort','ASC')->get();
        return view('Front.faq', $data);
    }
}
