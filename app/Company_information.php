<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company_information extends Authenticatable
{
    protected $fillable = [
        'company_name',
        'buisness_type',
        'company_id',
        'location',
        'buisness_regestration_no',
        'year_established',
        'payment_method',
        'credit_terms',
        'discount_rate',
        'currency',
        'email',
        'phone_no',
        'fax_no',
        'country_id',
        'city_id',
        'state_id',
        'postal_code',
        'prefer_courier',
        'courier_acc_no',
        'document_upload',
    ];
}
