<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_setting;

class ProductController extends Controller
{
    public function create_product()
    {
        $pro_settings=Product_setting::all();
        return view('admin.product.create_product',compact('pro_settings')); 
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
    public function product_color_setting(Request $r){
        if ($r->condition=="add") {
            $setting_add=new Product_setting;
            
            $setting_add->name=$r->val;
            $setting_add->type=$r->type;
            $setting_add->save();
            
            return response()->json([
                'request'=>$r->all(),
                'condition'=>'add',
                'setting'=>$setting_add,
            ]);
        }
        if ($r->condition=="edit") {

            $setting_edit=Product_setting::find($r->id);
            $setting_edit->name=$r->val;
            $setting_edit->update();

            return response()->json([
                'request'=>$r->all(),
                'condition'=>'edit',
                'setting'=>'setting',
            ]);
        }
        if ($r->condition=="delete") {
            return response()->json([
                'request'=>$r->all(),
                'condition'=>'delete',
            ]);
        }
        return response()->json([
            'request'=>$r->all(),
        ]);
    }
}
