<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AboutUsController extends Controller
{


    public $nav = "About";


    public function list()
    {
        $data['nav'] = $this->nav;
        $data['about'] = DB::table('abouts')->where('id', 1)->get();
        return view('admin.website.about_us.list', $data);
    }


    

    public function Edit(Request $request, $id)
    {

        $data['nav'] = $this->nav;
        $decryptID = decrypt($id);
        $data['data'] = DB::table('abouts')->find($decryptID);
        if ($request->isMethod('get')) {
            return view('admin.website.about_us.edit', $data);
        } else {
            // $validated = $request->validate([
            //     'name' => 'required|min:5|max:254',
            //     'slug' => 'required|min:5|max:255|unique:blogs,slug,'.$decryptID,
            //     'author' => 'nullable|min:5|max:254',
            // ]);
            $values = $request->all();
            // print_r($values);
            // dd($values);
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/blog'), $imageName);
                $imgPath = "uploads/about/" . $imageName;
                unset($values['image']);
            } else {
                $imgPath = $data['data']->image;
            }

            $values['image'] = $imgPath;
            if ($request->_token) {
                unset($values['_token']);
            }

            DB::table('abouts')->where('id', decrypt($id))->update($values);
            // return view('admin.website.about_us.edit', $data);
            return redirect()->route('admin_about_list' )->with('success_message', 'Successfully Record Updated');
        }
    }


    
}
