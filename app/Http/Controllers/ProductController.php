<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_setting;
use App\Brand;
use App\Product;
use App\Product_invertory;

class ProductController extends Controller
{
    public function create_product()
    {
        $pro_settings=Product_setting::all();
        $brands=Brand::all();
        return view('admin.product.create_product',compact('pro_settings','brands')); 
    }

    public function add_product(Request $request)
    {
        $product=new Product;
        $product->title=$request->p_tiltle;
        $product->brand=$request->brand_id;
        $product->sub_category=$request->sub_category;
        $product->category=$request->category;
        $product->unit=$request->unit;
        $product->company_adress_id=$request->company_adress_id;
        // $product->save();

        $pro_inventory=new Product_invertory;
        $pro_inventory->product_id=$product->id;
        $pro_inventory->sku=$request->sku;
        $pro_inventory->barcode=$request->barcode;
        $pro_inventory->dimensions=$request->dimension;
        $pro_inventory->weight=$request->weight;
        $pro_inventory->price=$request->price;
        $pro_inventory->promotion_price=$request->company_adress_id;
        $pro_inventory->cost=$request->prmotion_price;
        $pro_inventory->inventory=$request->inventory_available;
        $pro_inventory->country_id=$request->country;
        // $pro_inventory->save();

        return $request->all();
    }

    public function add_product_brand(Request $request){
        $brand=new Brand;
        $brand->name=$request->brand;
        $brand->save();
        return response()->json([
            'request'=>$request->all(),
            'brand'=>$brand,
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
                'p_set'=>Product_setting::all(),
                'type'=>$r->type,
            ]);
        }
        if ($r->condition=="edit") {

            $setting_edit=Product_setting::find($r->id);
            $setting_edit->name=$r->val;
            $setting_edit->update();

            return response()->json([
                'request'=>$r->all(),
                'condition'=>'edit',
                'setting'=>$setting_edit,
                'p_set'=>Product_setting::all(),
                'type'=>$r->type,
            ]);
        }
        if ($r->condition=="delete") {
            $setting_delete=Product_setting::find($r->id);
            $setting_delete->delete();
            return response()->json([
                'request'=>$r->all(),
                'condition'=>'delete',
                'p_set'=>Product_setting::all(),
                'type'=>$r->type,
            ]);
        }
        
        return response()->json([
            'request'=>$r->all(),
        ]);
    }
}
