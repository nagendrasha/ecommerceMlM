<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{


    public $nav = "Blog";


    public function list()
    {
        $data['nav'] = $this->nav;
        $data['slider'] = DB::table('blogs')->where('deleted', 0)->orderBy('sort', 'ASC')->get();
        return view('admin.website.blog.list', $data);
    }


    public function Create(Request $request)
    {

        $data['nav'] = $this->nav;
        if ($request->isMethod('get')) {
            return view('admin.website.blog.create', $data);
        } else {

            $validated = $request->validate([
                'title' => 'required|min:5|max:254',
                'slug' => 'required|unique:blogs|min:5|max:255',
                'author' => 'nullable|min:5|max:254',
            ]);
            $values = $request->all();
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/blog'), $imageName);
                $imgPath = "uploads/blog/" . $imageName;
                unset($values['image']);
            } else {
                $imgPath = "";
            }

            $values['image'] = $imgPath;
            if ($request->_token) {
                unset($values['_token']);
            }

            DB::table('blogs')->insert($values);


            return redirect()->route('admin_blogs_list')->with('success_message', 'Successfully Record Created');
        }
    }

    public function Edit(Request $request, $id)
    {

        $data['nav'] = $this->nav;
        $decryptID = decrypt($id);
        $data['data'] = DB::table('blogs')->find($decryptID);
        if ($request->isMethod('get')) {
            return view('admin.website.blog.edit', $data);
        } else {
            $validated = $request->validate([
                'title' => 'required|min:5|max:254',
                'slug' => 'required|min:5|max:255|unique:blogs,slug,'.$decryptID,
                'author' => 'nullable|min:5|max:254',
            ]);
            $values = $request->all();
            // dd($values);
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/blog'), $imageName);
                $imgPath = "uploads/blog/" . $imageName;
                unset($values['image']);
            } else {
                $imgPath = $data['data']->image;
            }

            $values['image'] = $imgPath;
            if ($request->_token) {
                unset($values['_token']);
            }

            DB::table('blogs')->where('id', decrypt($id))->update($values);

            return redirect()->route('admin_blogs_list')->with('success_message', 'Successfully Record Updated');
        }
    }


    public function Delete($id)
    {
        $idRemoved = DB::table('blogs')->where('id', decrypt($id))->update(['deleted' => 1]);
        if ($idRemoved) {
            return redirect()->route('admin_blogs_list')->with('success_message', 'Successfully Record Removed');
        } else {
            return redirect()->route('admin_blogs_list')->with('error_message', 'Something went wrong');
        }
    }
}
