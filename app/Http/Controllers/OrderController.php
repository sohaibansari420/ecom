<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create_orders(){
        return view('admin.order.create_order'); 
    }
    public function view_order(){
        return view('admin.order.view_order'); 
    }
}
