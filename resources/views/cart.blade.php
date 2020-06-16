@extends('layouts.app1')

@section('HeadContent')
@endsection

@section('BodyContent')
    <h1 class="cout">Users {{$user->FirstName}} cart</h1>

    <div class="table">
        <table id="customers">
            <tr>
                <th class="first">#</th>
                <th class="first">Product name</th>
                <th class="first">Amount</th>
                <th class="first">Actions</th>
            </tr>
            @for ($i = 0 ; $i < count($products); $i++)
                <tr class="row">
                    <td class="others">{{$items[$i]->id}}</td>
                    <td class="others">{{$products[$i]->productname}}</td>
                    <td class="others">{{$items[$i]->amount}}</td>
                    <td class="others"></td>
                </tr>
            @endfor
        </table>
    </div>

        <div class="review-form">
            <form action="{{route('order.store' )}} " method="POST">
            @csrf
                <input type="submit" value="buy">
            </form>
        </div>



    {{-- <div class="table">
        <table id="customers">
            <tr>
                <th class="first">{{__('text.user')}}</th>
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
    </div> --}}

@endsection
