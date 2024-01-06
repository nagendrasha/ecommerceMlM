<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ContactUsController extends Controller
{
    public function Index()
    {
        return view('Front.contactus');
    }

    public function savecontactus(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|min:3|max:255',
            'last_name' => 'required|min:5|max:255',
            'email_id' => 'required|email',
            'phone_number' => 'required|min:11|numeric',
            'comment' => 'required'
        ], [
            'first_name.required' => 'The First Name field is required.',
            'first_name.min' => 'The First Name field is required min 5 characters.',
            'first_name.max' => 'The First Name field is required max 50 characters.',
            
            'last_name.required' => 'The Last Name field is required.',
            'last_name.min' => 'The Last Name field is required min 5 characters.',
            'last_name.max' => 'The Last Name field is required max 50 characters.',
            
            'email_id.required' => 'The Email ID field is required.',
            'phone_number.required' => 'The Phone Number field is required.',
            'phone_number.max' => 'The Phone Number field is required min 10 characters.',
            'phone_number.min' => 'The Phone Number field is required min 10 characters.',
        ]);
        $values = $request->all();
        
        if ($request->_token) {
            unset($values['_token']);
        }

        DB::table('contactuses')->insert($values);

        return redirect()->route('forntend_contactus')->with('success_message', 'Successfully Record Created');
    }
}
