<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    protected $table = "cart";

    public $timestamps = false; //this is needed so laravel woudnt try to insert time stamps in to our table

    protected $fillable = [
        'id', 'ProductID', 'userID', 'amount',
   ];

   
}
