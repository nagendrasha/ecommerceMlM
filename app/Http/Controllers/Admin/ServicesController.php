<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ServicesController extends Controller
{


    public $nav = "Services";

    public function __construct()
    {
    }

    public function list()
    {
        $data['nav'] = $this->nav;
        $data['services'] = DB::table('services')->where('deleted', 0)->orderBy('sort', 'ASC')->get();
        return view('admin.service.list', $data);
    }


    public function Create(Request $request)
    {

        $data['nav'] = $this->nav;
        if ($request->isMethod('get')) {
            return view('admin.service.create', $data);
        } else {
            $validated = $request->validate([
                'title' => 'required|min:5|max:255',
                'name' => 'required|min:5|max:255'
            ], [
                'title.required' => 'The Title field is required.',
                'title.min' => 'The Title field is required min 5 characters.',
                'title.max' => 'The Title field is required max 50 characters.',
            ]);
            $values = $request->all();
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/services'), $imageName);
                $imgPath = "uploads/services/" . $imageName;
                unset($values['image']);
            } else {
                $imgPath = "";
            }


            $values['image'] = $imgPath;
            if ($request->_token) {
                unset($values['_token']);
            }

            DB::table('services')->insert($values);

            return redirect()->route('admin_service_list')->with('success_message', 'Successfully Record Created');
        }
    }

    public function Edit(Request $request, $id)
    {

        $data['nav'] = $this->nav;
        $data['service'] = DB::table('services')->find(decrypt($id));
        if ($request->isMethod('get')) {
            return view('admin.service.edit', $data);
        } else {
            $validated = $request->validate([
                'title' => 'required|min:5|max:255',
                'name' => 'required|min:5|max:255',
            ], [
                'title.required' => 'The Title field is required.',
                'title.min' => 'The Title field is required min 5 characters.',
                'title.max' => 'The Title field is required max 50 characters.',
            ]);
            $values = $request->all();
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/services'), $imageName);
                $imgPath = "uploads/services/" . $imageName;
                unset($values['image']);
            } else {
                $imgPath = $data['service']->image;
            }

            $values['image'] = $imgPath;
            if ($request->_token) {
                unset($values['_token']);
            }

            DB::table('services')->where('id', decrypt($id))->update($values);

            return redirect()->route('admin_service_list')->with('success_message', 'Successfully Record Updated');
        }
    }


    public function Delete($id)
    {
        $idRemoved = DB::table('services')->where('id', decrypt($id))->update(['deleted' => 1]);
        if ($idRemoved) {
            return redirect()->route('admin_service_list')->with('success_message', 'Successfully Record Removed');
        } else {
            return redirect()->route('admin_service_list')->with('error_message', 'Something went wrong');
        }
    }
}
