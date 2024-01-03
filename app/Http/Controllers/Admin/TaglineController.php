<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class TaglineController extends Controller
{


    public $nav = "Tagline";


    public function list()
    {
        $data['nav'] = $this->nav;
        $data['dataArr'] = DB::table('taglines')->where('deleted', 0)->orderBy('sort', 'ASC')->get();
        return view('admin.other.tagline.list', $data);
    }


    public function Create(Request $request)
    {

        $data['nav'] = $this->nav;
        if ($request->isMethod('get')) {
            return view('admin.other.tagline.create', $data);
        } else {

            $validated = $request->validate([
                'title' => 'required|min:5|max:1000',
                'link' => 'required|url',
                            ]);
            $values = $request->all();
            $values['sort'] = $request->sort ? $request->sort : 0;
            
            if ($request->_token) {
                unset($values['_token']);
            }

            DB::table('taglines')->insert($values);


            return redirect()->route('admin_tagline_list')->with('success_message', 'Successfully Record Created');
        }
    }

    public function Edit(Request $request, $id)
    {

        $data['nav'] = $this->nav;
        $decryptID = decrypt($id);
        $data['data'] = DB::table('taglines')->find($decryptID);
        if ($request->isMethod('get')) {
            return view('admin.other.tagline.edit', $data);
        } else {
            $validated = $request->validate([
                'title' => 'required|min:5|max:1000',
                'link' => 'required|url',
                            ]);
            $values = $request->all();
            $values['sort'] = $request->sort ? $request->sort : 0;
          
            if ($request->_token) {
                unset($values['_token']);
            }

            DB::table('taglines')->where('id', decrypt($id))->update($values);

            return redirect()->route('admin_tagline_list')->with('success_message', 'Successfully Record Updated');
        }
    }


    public function Delete($id)
    {
        $idRemoved = DB::table('taglines')->where('id', decrypt($id))->update(['deleted' => 1]);
        if ($idRemoved) {
            return redirect()->route('admin_tagline_list')->with('success_message', 'Successfully Record Removed');
        } else {
            return redirect()->route('admin_tagline_list')->with('error_message', 'Something went wrong');
        }
    }
}
