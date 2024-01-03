<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //
    public function New()
    {
        return view('admin.orders.new-order.new-order');
    }
    public function Detail()
    {
        return view('admin.orders.order-detail.order-detail');
    }
    public function History()
    {
        return view('admin.orders.order-history.order-history');
    }
    public function Invoice()
    {
        return view('admin.orders.invoice.invoice');
    }

}
