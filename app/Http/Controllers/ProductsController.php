<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
   public function display()
   { $prods = DB::table('products')->get();
       return view('products', ['prods' => $prods]);
   }
}
