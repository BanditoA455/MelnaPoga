<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $items = Cart::where('userID', '=', $user->id)->get();
        $len = count($items);
        $products = [];
        for($i = 0; $i < $len; $i++){
            $products[$i] = Products::where('id', '=', $items[$i]->ProductID)->first();
        }
        // $products = Products::where('id', '=', $items[0]->ProductID)->get();
        return view('cart')->with([
            'user' => $user,
            'items' => $items,
            'products' => $products
        ]);
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

    public function remove()
    {


        return redirect()->route('cart');
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $user = Auth::user();

        //-----------------------------

        $currentcart = Cart::where('ProductID', $id)->where('userID', $user->id )->first();
        if ($currentcart == null){
            $cart = new Cart;
            $cart->userID = $user->id;
            $cart->ProductID = $id;
            $cart->amount = $request->amount;
            $cart->save();
        }
        else {
        $currentcart->amount = $currentcart->amount + $request->amount;
        $currentcart->save();
        }



//----------------------------

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
       // dd( $id);

        $user = Auth::user();
        $button = Cart::where('userID', $user->id)->where('id', $id)->first();
        $button->delete();
        //Cart::destroy($button->toArray());
        //dd( $button);

        return redirect()->route('cart.index');

    }
}
