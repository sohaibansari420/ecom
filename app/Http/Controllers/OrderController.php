<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create_orders(){
        return view('admin.order.create_order'); 
    }
}
