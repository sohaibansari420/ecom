<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create_product(){
        return view('admin.product.create_product'); 
    }
}