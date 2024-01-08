<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;

class LoginOTPController extends Controller
{

    public function OTPLoginPage()
    {
        return view('auth.otp_login');
    }


    public function OTPLoginSendOTP(Request $request){
        $phone = $request->phone;
        $isNumberExists = DB::table('user_details')->where('phone',$phone)->first();
        if(!$isNumberExists){
        return ['status'=>404,'response'=>'No Data','message'=>'This number Not Exists in our Records'];
        }  
        $otp = rand(1391,9874);
        Session::put('otp_value',$otp);
        return ['status'=>200,'response'=>$otp,'message'=>'OTP Sent to XXXXXX'.substr($phone, -4)];
    }


    public function OTPVerify(Request $request){
        $reqOTP = $request->otp;
        $sessOTP = Session::get('otp_value');
        if($sessOTP != $reqOTP){
         return ['status'=>401,'response'=>'Invalid OTP','message'=>'Invalid OTP'];
        }else{
            Session::forget('otp_value');
            return ['status'=>200,'response'=>'','message'=>'Redirecting....'];
        }
    }
}
