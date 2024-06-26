<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AboutUsController extends Controller
{


    public $nav = "About Us";

    public function Index(Request $request)
    {

        $data['nav'] = $this->nav;
        $data['data'] = DB::table('abouts')->first();
        if ($request->isMethod('get')) {
            return view('admin.website.about_us.edit', $data);
        } else {
            $validated = $request->validate([
                'name' => 'required|min:5|max:254',
            ]);
            $values = $request->all();
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/about_us'), $imageName);
                $imgPath = "uploads/about_us/" . $imageName;
                unset($values['image']);
            } else {
                $imgPath = $data['data']->image;
            }

            $values['image'] = $imgPath;
            if ($request->_token) {
                unset($values['_token']);
            }
            $id = 1;
            DB::table('abouts')->where('id',$id)->update($values);
            return redirect()->route('admin_aboutus' )->with('success_message', 'Successfully Record Updated');
        }
    }

    
    
}
