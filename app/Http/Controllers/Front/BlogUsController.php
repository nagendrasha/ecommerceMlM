<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class BlogUsController extends Controller
{
    public function Index()
    {
        $data['blogs'] = DB::table('blogs')->where(['status'=>1,'deleted'=>0])->orderBy('sort','ASC')->get();
        $data['latestBlogs'] = DB::table('blogs')->where(['status'=>1,'deleted'=>0])->latest()->get();
        return view('Front.blogs',$data);
    }

    public function Detail($slug)
    {
        $data['detail'] = DB::table('blogs')->where(['status'=>1,'deleted'=>0,'slug'=>$slug])->first();
        if(!$data['detail']){
            abort(404);
        }
        return view('Front.blog_detail',$data);
    }
}
