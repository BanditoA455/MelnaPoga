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

   public function index()
    {
        $products = DB::table('products')->get();
        return view('home')->with('products', $products); 
    }
}
