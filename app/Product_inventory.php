<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Product_inventory extends Authenticatable
{
    protected $fillable = [
        'product_id',
        'sku',
        'barcode',
        'dimensions',
        'weight',
        'price',
        'promotion_price',
        'cost',
        'inventory',
        'country_id',
    ];
}
