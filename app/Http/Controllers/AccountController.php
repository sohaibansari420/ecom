<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_setting;
use App\Billing_contact;
use App\Company_information;
use App\Shipping_contact;
use App\Country;
use App\City;
use App\State;

class AccountController extends Controller
{
    public function add_account_creation(){
        $country=Country::all();
        $city=City::all();
        $state=State::all();
        return view('admin.Accounts.account_creation',[$country,$city,$state]);
    }
    public function save_account_creation(Request $r){
        $ci=new Company_information;
        // $ci->company_name=$r->company_name;
        // $ci->buisness_type=$r->bus_type;
        // $ci->company_id=$r->company_id;
        // $ci->location=$r->location;
        // $ci->buisness_regestration_no=$r->bss_reg_number;
        // $ci->year_established=$r->year;
        // $ci->payment_method=$r->payment_method;
        // $ci->credit_terms=$r->credit_terms;
        // $ci->discount_rate=$r->discount_rate;
        // $ci->currency=$r->currency;
        // $ci->email=$r->url;
        // $ci->phone_no=$r->phone_number;
        // $ci->fax_no=$r->;
        // $ci->country_id=$r->;
        // $ci->city_id=$r->;
        // $ci->state_id=$r->;
        // $ci->postal_code=$r->;
        // $ci->prefer_courier=$r->;
        // $ci->courier_acc_no=$r->;
        // $ci->document_upload=$r->;
        // $ci->save();

        $bc=new Billing_contact;
        // $bc->first_name=$r->;
        // $bc->last_name=$r->;
        // $bc->company_information_id=$r->;
        // $bc->title=$r->;
        // $bc->email=$r->;
        // $bc->phone_number=$r->;
        // $bc->mobile=$r->;
        // $bc->country_id=$r->;
        // $bc->city_id=$r->;
        // $bc->state_id=$r->;
        // $bc->postal_code=$r->;
        // $bc->address_1=$r->;
        // $bc->address_2=$r->;
        // $bc->company_address=$r->;
        // $bc->save();

        $sc=new Shipping_contact;
        // $sc->first_name=$r->;
        // $sc->last_name=$r->;
        // $sc->company_information_id=$r->;
        // $sc->title=$r->;
        // $sc->email=$r->;
        // $sc->phone_number=$r->;
        // $sc->mobile=$r->;
        // $sc->country_id=$r->;
        // $sc->city_id=$r->;
        // $sc->state_id=$r->;
        // $sc->postal_code=$r->;
        // $sc->address_1=$r->;
        // $sc->address_2=$r->;
        // $sc->company_address=$r->;
        // $sc->save();
        return response()->json([
            'r'=>$r->all()
        ]);
    }
}
