<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_setting;
use app\Billing_contact;
use app\Company_information;
use app\Shipping_contact;

class AccountController extends Controller
{
    public function add_account_creation(){
        return view('admin.Accounts.account_creation');
    }
    public function save_account_creation(Request $r){
        return response()->json([
            'r'=>$r->all()
        ]);
    }
}
