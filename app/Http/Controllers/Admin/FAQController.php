<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class FAQController extends Controller
{


    public $nav = "FAQ";


    public function list()
    {
        $data['nav'] = $this->nav;
        $data['dataArr'] = DB::table('faqs')->where('deleted', 0)->orderBy('sort', 'ASC')->get();
        return view('admin.website.faq.list', $data);
    }


    public function Create(Request $request)
    {

        $data['nav'] = $this->nav;
        if ($request->isMethod('get')) {
            return view('admin.website.faq.create', $data);
        } else {

            $validated = $request->validate([
                'question' => 'required|min:10|max:1000',
                'answer' => 'required|min:5|max:1000',
                            ]);
            $values = $request->all();
            
            if ($request->_token) {
                unset($values['_token']);
            }

            DB::table('faqs')->insert($values);


            return redirect()->route('admin_faq_list')->with('success_message', 'Successfully Record Created');
        }
    }

    public function Edit(Request $request, $id)
    {

        $data['nav'] = $this->nav;
        $decryptID = decrypt($id);
        $data['data'] = DB::table('faqs')->find($decryptID);
        if ($request->isMethod('get')) {
            return view('admin.website.faq.edit', $data);
        } else {
            $validated = $request->validate([
                'question' => 'required|min:10|max:1000',
                'answer' => 'required|min:5|max:1000',
                            ]);
            $values = $request->all();
          
            if ($request->_token) {
                unset($values['_token']);
            }

            DB::table('faqs')->where('id', decrypt($id))->update($values);

            return redirect()->route('admin_faq_list')->with('success_message', 'Successfully Record Updated');
        }
    }


    public function Delete($id)
    {
        $idRemoved = DB::table('faqs')->where('id', decrypt($id))->update(['deleted' => 1]);
        if ($idRemoved) {
            return redirect()->route('admin_faq_list')->with('success_message', 'Successfully Record Removed');
        } else {
            return redirect()->route('admin_faq_list')->with('error_message', 'Something went wrong');
        }
    }
}
