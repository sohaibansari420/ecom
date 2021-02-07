<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_setting;

class AccountController extends Controller
{
    public function add_account_creation(){
        return view('admin.Accounts.account_creation');
    }
}
