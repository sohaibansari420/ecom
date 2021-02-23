<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Shipping_contact extends Authenticatable
{
    protected $fillable = [
        'first_name',
        'last_name',
        'company_information_id',
        'title',
        'email',
        'phone_number',
        'mobile',
        'country_id',
        'city_id',
        'state_id',
        'postal_code',
        'address_1',
        'address_2',
        'company_address',
    ];
}
