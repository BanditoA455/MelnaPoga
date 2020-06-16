@extends('layouts.app2')

@section('HeadContent')
@endsection

@section('BodyContent')

    <div class="cout">{{__('text.welcome_review')}} {{$product->productname}}</div>

    <div class="table">
        <table id="customers">
            <tr>
                <th class="first">{{__('text.user')}}</th>  {{-- te apvieno first name un last name--}}
                <th class="first">{{__('text.review')}}</th>
                <th class="first">{{__('text.rating')}}</th>
                <th class="first">{{__('text.actions')}}</th>
            </tr>
            @foreach ( $reviews as $review)

            

                @foreach ($users as $user)
                    @if ($user->id === $review->userID)
                        <td class="others">{{$user->FirstName}} {{$user->LastName}}</td>
                    @endif
                @endforeach

                <td class="others">{{$review->review}}</td>
                <td class="others">{{$review->rating}}</td>
                <td class="others">
                    buttons
                </td>
            </tr>
            

            @endforeach
    
        </table>
    </div>

    @guest
    <div class="cannot">{{__('text.login_review')}}</div>
    @else
        <div class="review-form">
            <form action="{{route('reviews.create', $product->id)}}">
                <input type="submit" value="{{__('text.add_review')}}">
            </form>
        </div>
    @endguest
        
    

@endsection