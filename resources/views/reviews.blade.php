@extends('layouts.app2')

@section('HeadContent')
@endsection

@section('BodyContent')

    <div class="cout">This is the reviews page</div>

    <div class="table">
        <table id="customers">
            <tr>
                <th class="first">User</th>  {{-- te apvieno first name un last name--}}
                <th class="first">Product name</th>
                <th class="first">review</th>
                <th class="first">Rating</th>
                <th class="first">Actions</th>
            </tr>
            @foreach ( $reviews as $review)
            <tr class="row">
                <td class="others">{{$user->FirstName}} {{$user->LastName}}</td>
                <td class="others">{{$product->productname}}</td>
                <td class="others">{{$review->review}}</td>
                <td class="others">{{$review->rating}}</td>
                <td class="others">
                    buttons
                </td>
            </tr>
            @endforeach
    
        </table>
    </div>

    <div class="review-form">
        <form action="">
            <input type="submit" value="Add a review">
        </form>
    </div>

@endsection