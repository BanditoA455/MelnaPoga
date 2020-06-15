@extends('layouts.app2')

@section('HeadContent')
@endsection

@section('BodyContent')

    <div class="cout">This is the reviews page for: {{$product->productname}}</div>

    <div class="table">
        <table id="customers">
            <tr>
                <th class="first">User</th>  {{-- te apvieno first name un last name--}}
                <th class="first">Review</th>
                <th class="first">Rating</th>
                <th class="first">Actions</th>
            </tr>
            @foreach ( $reviews as $review)

            

                @foreach ($users as $user)
                    @if ($user->id === $review->userID)
                        <td class="others">{{$user->FirstName}} {{$user->LastName}}</td>
                    @endif
                @endforeach
                {{-- <td class="others">{{$user->FirstName}} {{$user->LastName}}</td> --}}
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
        <form action="{{route('reviews.create', $product->id)}}">
            <input type="submit" value="Add a review">
        </form>
    </div>

@endsection