<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $timestamps = false; //this is needed so laravel woudnt try to insert time stamps in to our table

    protected $fillable = [
        'userID', 'country', 'city', 'street', 'number',
   ];
}
