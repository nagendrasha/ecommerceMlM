<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponController extends Controller
{
    //
    public function index()
    {
        $data['nav'] = "Coupon";
        $data['coupon'] = Coupon::get();
        return view('admin.products.coupon.coupon', $data);
    }

    public function addCoupon(Request $request) {
        $id = $request->id;
        if($request->id) {
            $id = decrypt($id);
        }
        $coupon = Coupon::find($id);
        $data['coupon'] = $coupon;
        return view('admin.products.coupon.add-coupon', $data);
    }

    public function saveCoupon(Request $request) {
        $validated = $request->validate([
            'coupon_name' => 'required|max:1000',
            'coupon_code' => 'required|max:50',
            'type' => 'required',
            'discount' => 'required',
            's_date' => 'required',
        ]);
        $coupon = Coupon::findOrNew($request->id);
        $coupon->coupon_name = $request->coupon_name;
        $coupon->coupon_code = $request->coupon_code;
        $coupon->type = $request->type;
        $coupon->discount = $request->discount;
        $coupon->s_date = $request->s_date;
        $coupon->e_date = $request->e_date;
        $coupon->status = $request->status;
        if($coupon->save()) {
            return redirect()->route('admin_coupon_coupon')->with('success_message', 'Coupon saved successfully!');
        }
    }

    public function deleteCoupon(Request $request) {
        $coupon = Coupon::find($request->id);
        if($coupon && $coupon->delete()) {
            return response()->json(['message'=>'Coupon Deleted Successfully'], 200);
        } else {
            return response()->json(['message'=>'Something went wrong !!'], 400);
        }
    }
}