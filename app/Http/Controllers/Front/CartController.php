<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use DB;

class CartController extends Controller
{
    public function CartList()
    {

        return view('Front.my_cart');
    }

    public function Checkout()
    {

        return view('Front.checkout');
    }

    public function Wishlist(){
        $data['wishlists'] = DB::table('wishlists')->where(['deleted'=>0])->orderBy('sort','ASC')->get();
        return view('Front.wishlist', $data);
    }

    public function addToWishlist($id) {
        dd($request->all());
    }

    public function addToCart(Request $request) {
        dd($request->all());
    }
}
