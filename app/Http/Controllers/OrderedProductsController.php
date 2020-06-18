<?php

namespace App\Http\Controllers;

use App\OrderedProducts;
use App\Products;
use App\Cart;
use App\Order;
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
        $cartproducts = Cart::where('userID', '=', $current_user->id)->get();
        $order = new Order;
        $order->userID = $current_user->id;
        $order->orderstatus = 'pasutits';
        $order->ordertotalprice = 0;
        $order->save();
        $orderID = $order->id;

        $supertotalprice = 0;
        foreach($cartproducts as $cartproduct){
            $orderedproduct= new OrderedProducts;
            $orderedproduct->orderID=$orderID;
            $orderedproduct->productID = $cartproduct->ProductID;
            $product = Products::where('id', '=', $cartproduct->ProductID)->first();
            $productprice = $product->productprice;
            $orderedproduct->amount = $cartproduct->amount;

            // total price for one product
            $totalPrice  =  $productprice*($cartproduct->amount);
            $orderedproduct->price = $totalPrice;
            $orderedproduct->save();

// order total price
            $supertotalprice = $supertotalprice +$totalPrice;
            }
            $order->ordertotalprice = $supertotalprice;
            $order->save();

        $collection = Cart::where('userID',$current_user->id)->get(['id']);
        Cart::destroy($collection->toArray());
          //  $cartproducts->whereIn('userID', $current_user->id)->delete();
      //  $cartproducts->save();
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
