<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Country extends Authenticatable
{
    protected $fillable = [
        'name',
        'state_id',
        'state_code',
        'country_id',
        'country_code',
        'lattitude',
        'longitude',
        'flag',
        'wikiDataId'
    ];

    public function states()
    {
        return $this->hasMany('App\State', 'country_id');
    }
}
