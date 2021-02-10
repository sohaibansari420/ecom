<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Product extends Authenticatable
{
    protected $fillable = [
        'title',
        'brand_id',
        'sub_category',
        'category',
        'unit',
        'company_adress_id',
        'file',
    ];
}
