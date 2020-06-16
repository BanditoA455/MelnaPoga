<?php

namespace App\Http\Controllers;

use App\OrderedProducts;
use App\Products;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderedProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($productId)
    {
        $products = Products::where('id' , '=' , $productId)->first();
        return view('cart')->with([
            'product' => $products
        ]);
        dd($products);
        return $products->productname;
        dd($request);
        return view('cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Products $product)
    {
        dd($product);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $current_user = Auth::user();
        $cartproducts = Products::where('id', '=', $current_user->id)->get();
        dd($cartproducts, $current_user);
        foreach($cartproducts as $cartproduct){
            $orderedproduct= new OrderedProducts;
            $orderedproduct->productID = $cartproduct->ProductID;
            $orderedproduct->userID = $cartproduct->userID;
            $orderedproduct->amount = $cartproduct->amount;
            $orderedproduct->save();

            }
            return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrderedProducts  $orderedProducts
     * @return \Illuminate\Http\Response
     */
    public function show(OrderedProducts $orderedProducts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrderedProducts  $orderedProducts
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderedProducts $orderedProducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderedProducts  $orderedProducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderedProducts $orderedProducts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderedProducts  $orderedProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderedProducts $orderedProducts)
    {
        //
    }
}
