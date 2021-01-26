<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create_product()
    {
        return view('admin.product.create_product'); 
    }

    public function add_product(Request $request)
    {
        return $request->all();
    }

    public function add_product_brand(Request $request){
        return response()->json([
            'request'=>$request->all(),
        ]);
    }
}
