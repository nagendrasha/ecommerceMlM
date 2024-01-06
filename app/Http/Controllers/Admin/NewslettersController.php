<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class NewslettersController extends Controller
{


    public $nav = "Newsletters";

    public function __construct()
    {
    }

    public function list()
    {
        $data['nav'] = $this->nav;
        $data['newsletters'] = DB::table('newsletters')->where('deleted', 0)->orderBy('id', 'ASC')->get();
        return view('admin.newsletter.list', $data);
    }


    public function Create(Request $request)
    {

        $data['nav'] = $this->nav;
        if ($request->isMethod('get')) {
            return view('admin.newsletter.create', $data);
        } else {
            $validated = $request->validate([
                'title' => 'required|min:5|max:255',
                'link' => 'nullable|url',
            ], [
                'title.required' => 'The Title field is required.',
                'title.min' => 'The Title field is required min 5 characters.',
                'title.max' => 'The Title field is required max 50 characters.',
                'title.max' => 'The Title field is required max 50 characters.',
                'link.url' => 'Please Check your URL.',
            ]);
            $values = $request->all();
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/slider'), $imageName);
                $imgPath = "uploads/slider/" . $imageName;
                unset($values['image']);
            } else {
                $imgPath = "";
            }


            $values['image'] = $imgPath;
            if ($request->_token) {
                unset($values['_token']);
            }

            DB::table('sliders')->insert($values);

            return redirect()->route('admin_slider_list')->with('success_message', 'Successfully Record Created');
        }
    }

    public function Edit(Request $request, $id)
    {

        $data['nav'] = $this->nav;
        $data['slider'] = DB::table('sliders')->find(decrypt($id));
        if ($request->isMethod('get')) {
            return view('admin.website.slider.edit', $data);
        } else {
            $validated = $request->validate([
                'title' => 'required|min:5|max:255',
                'link' => 'nullable|url',
            ], [
                'title.required' => 'The Title field is required.',
                'title.min' => 'The Title field is required min 5 characters.',
                'title.max' => 'The Title field is required max 50 characters.',
                'link.url' => 'Please Check your URL.',
            ]);
            $values = $request->all();
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/slider'), $imageName);
                $imgPath = "uploads/slider/" . $imageName;
                unset($values['image']);
            } else {
                $imgPath = $data['slider']->image;
            }

            $values['image'] = $imgPath;
            if ($request->_token) {
                unset($values['_token']);
            }

            DB::table('sliders')->where('id', decrypt($id))->update($values);

            return redirect()->route('admin_slider_list')->with('success_message', 'Successfully Record Updated');
        }
    }


    public function Delete($id)
    {
        $idRemoved = DB::table('newsletters')->where('id', decrypt($id))->update(['deleted' => 1]);
        if ($idRemoved) {
            return redirect()->route('admin_slider_list')->with('success_message', 'Successfully Record Removed');
        } else {
            return redirect()->route('admin_slider_list')->with('error_message', 'Something went wrong');
        }
    }
}
