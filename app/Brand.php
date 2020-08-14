<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;


class Brand extends Model
{
    protected $fillable = [
        'name', 'photo'
    ];


    public function items($value='')
    {
    	return $this->hasMany('App\Item');
    }
}
