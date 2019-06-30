<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index(Request $request)
    {
        return view('order.index');
    }

    public function client(Request $request)
    {
        return view('order.client');
    }

    public function certificate(Request $request)
    {
        return view('order.certificate');
    }

}
