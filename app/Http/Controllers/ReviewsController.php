<?php

namespace App\Http\Controllers;

use App\Products;
use App\Reviews;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $product = Products::where('id', '=', $id)->first();
        $reviews = Reviews::where('productID',  '=', $id)->get();
        $current_user = Auth::user();
        $users = [];
        for ($i = 0; $i < count($reviews); $i++){
            $users[$i] = User::where('id', '=', $reviews[$i]->userID)->first();
        }
        return view('reviews')->with([
            'users' => $users,
            'current_user' => $current_user,
            'product' => $product,
            'productid' => $id,
            'reviews' => $reviews
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $product = Products::where('id', '=', $id)->first();
        $user = Auth::user();
        return view('new_review')->with([
            'user' => $user,
            'product' => $product
        ]);
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
        $review = new Reviews;
        $review->userID = $user->id;
        $review->productID = $id;
        $review->review = $request->text;
        $review->rating = $request->rating;
        $review->save();
        return redirect()->route('reviews.index', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function show(Reviews $reviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $review = Reviews::where('id', '=', $id)->first();

        if ($review->userID === $user->id){
            return view('edit_review')->with([
                'review' => $review
            ]);
        } else if (Gate::allows('edit-users')){
            return view('edit_review')->with([
                'review' => $review
            ]);
        } else{
            return redirect()->route('reviews.index', $review->productID);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $review = Reviews::where('id', '=', $id)->first();
        $review->review = $request->text;
        $review->rating = $request->rating;
        $review->userID = $request->userID;
        $review->productID = $request->productID;
        $review->save();

        return redirect()->route('reviews.index', $review->productID);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reviews  $reviews
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Reviews::where('id', '=', $id)->first();
        $user = Auth::user();
        $id = $review->productID;

        if ($review->userID === $user->id){
            $review->delete();
            return redirect()->route('reviews.index', $id);
        } else if (Gate::allows('edit-users')){
            $review->delete();
            return redirect()->route('reviews.index', $id);
        } else{
            return redirect()->route('reviews.index', $id);
        }
    }
}
