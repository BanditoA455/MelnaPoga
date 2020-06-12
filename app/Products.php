<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{


    protected $fillable = [
         'id', 'productname', 'productprice',
    ];


    public function giveData(){
        //
    }
}
