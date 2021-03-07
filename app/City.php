<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class City extends Authenticatable
{
    protected $fillable = [
        'name',
        'iso3',
        'iso2',
        'phonecode',
        'capital',
        'currency',
        'currency_symbol',
        'tld',
        'native',
        'region',
        'subregion',
        'timezones',
        'transalations',
        'lattitude',
        'longitude',
        'emoji',
        'emojiU',
        'flag',
        'wikiDataId'
    ];

    public function state()
    {
        return $this->belongsTo('App\State', 'state_id');
    }
}
