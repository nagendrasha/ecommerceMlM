<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PageController extends Controller
{
    public $nav = "Page";


    public function list()
    {
        $data['nav'] = $this->nav;
        $data['slider'] = DB::table('pages')->where('deleted', 0)->orderBy('sort', 'ASC')->get();
        return view('admin.website.page.list', $data);
    }


    public function Create(Request $request)
    {

        $data['nav'] = $this->nav;
        if ($request->isMethod('get')) {
            return view('admin.website.page.create', $data);
        } else {
            // dd($request);
            $validated = $request->validate([
                'title' => 'required|min:5|max:254',
                'slug' => 'required|unique:pages|min:5|max:255',
                'name' => 'required|min:5|max:254',
            ]);
            $values = $request->all();
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/page'), $imageName);
                $imgPath = "uploads/page/" . $imageName;
                unset($values['image']);
            } else {
                $imgPath = "";
            }

            $values['image'] = $imgPath;
            if ($request->_token) {
                unset($values['_token']);
            }

            DB::table('pages')->insert($values);


            return redirect()->route('admin_pages_list')->with('success_message', 'Successfully Record Created');
        }
    }

    public function Edit(Request $request, $id)
    {

        $data['nav'] = $this->nav;
        $decryptID = decrypt($id);
        $data['data'] = DB::table('pages')->find($decryptID);
        if ($request->isMethod('get')) {
            return view('admin.website.page.edit', $data);
        } else {
            $validated = $request->validate([
                'title' => 'required|min:5|max:254',
                'slug' => 'required|min:5|max:255|unique:blogs,slug,'.$decryptID,
                'name' => 'required|min:5|max:254',
            ]);
            $values = $request->all();
            // dd($values);
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/page'), $imageName);
                $imgPath = "uploads/page/" . $imageName;
                unset($values['image']);
            } else {
                $imgPath = $data['data']->image;
            }

            $values['image'] = $imgPath;
            if ($request->_token) {
                unset($values['_token']);
            }

            DB::table('pages')->where('id', decrypt($id))->update($values);

            return redirect()->route('admin_pages_list')->with('success_message', 'Successfully Record Updated');
        }
    }


    public function Delete($id)
    {
        $idRemoved = DB::table('pages')->where('id', decrypt($id))->update(['deleted' => 1]);
        if ($idRemoved) {
            return redirect()->route('admin_pages_list')->with('success_message', 'Successfully Record Removed');
        } else {
            return redirect()->route('admin_pages_list')->with('error_message', 'Something went wrong');
        }
    }
}
