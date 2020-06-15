<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    public $timestamps = false; //this is needed so laravel woudnt try to insert time stamps in to our table

    protected $fillable = [
        'userID', 'productID', 'rating', 'review',
    ];
}
