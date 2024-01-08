<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class NewsletterController extends Controller
{
    

    public function savenewsletter(Request $request)
    {
       
        $values = $request->all();
        
        if ($request->_token) {
            unset($values['_token']);
        }

        DB::table('newsletters')->insert($values);

        return redirect()->route('frontend_newsletter_thankyou')->with('success_message', 'Successfully Record Created');
    }
    
    public function newsletterthankyou(Request $request)
    {
        return view('Front.thank_you');
    }
    
}
