<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    public $timestamps = false;

    public function scopeLang($query,$lang)
    {
        return $query->where('lang', $lang);
    }
}
