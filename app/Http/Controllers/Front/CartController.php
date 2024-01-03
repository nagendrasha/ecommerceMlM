<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        return view('Front.wishlist');
    }
}
