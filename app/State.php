<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class State extends Authenticatable
{
    protected $fillable = [
        'name',
        'iso2',
        'fips_code',
        'country_id',
        'country_code',
        'lattitude',
        'longitude',
        'flag',
        'wikiDataId'
    ];
}
