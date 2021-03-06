<?php

namespace App\Http\Controllers;
use DB;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{

    public function display()
    {
        // $prods = Products::all();

        $prods = FilterCollection::applyFilters();
        $user = Auth::user();
        $types = DB::table('products')->distinct('producttype')->pluck('producttype');
        $types->prepend('all');
        $colors = DB::table('products')->distinct('productcolor')->pluck('productcolor');
        $colors->prepend('all');
        $_colors =[];
        foreach($colors as $color) {
            $_colors[$color] = $color;
        }
        $colors = $_colors;
        $_types =[];

        foreach($types as $type) {
            $_types[$type] = $type;
        }
        $types = $_types;
        return view('home', [
            'products' => $prods,
            'types' =>$types,
            'colors' =>$colors,
            'user' => $user
        ]);


    }
    public function filter(Request $request)
    {
        $filters = FilterCollection::getFromRequest($request);
        $prods = FilterCollection::applyFilters($filters);
        $types = DB::table('products')->distinct('producttype')->pluck('producttype');
        $types->prepend('all');
        $colors = DB::table('products')->distinct('productcolor')->pluck('productcolor');
        $colors->prepend('all');
        $_colors =[];
        foreach($colors as $color) {
            $_colors[$color] = $color;
        }
        $colors = $_colors;
        $_types =[];
        foreach($types as $type) {
            $_types[$type] = $type;
        }
        $types = $_types;
        $user = Auth::user();


        return view('home', [

            'products' => $prods,
            'types' =>$types,
            'colors' =>$colors,
            'user' => $user
        ]);






    }









    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products = DB::table('products')->get();
        //$products = DB::table('products')->get();
        $products = Products::all();
        return view('home')->with('products', $products);

        //$user = Auth::user();
        //return view('home')->with([
        //    'products' => $products,
        //    'user' => $user
        //]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
}
