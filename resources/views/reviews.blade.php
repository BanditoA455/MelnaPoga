@extends('layouts.app1')

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
                <th class="first" colspan="2">{{__('text.actions')}}</th>
            </tr>
            {{-- @foreach ( $reviews as $review) --}}
            @for ($i = 0; $i < count($reviews); $i++)

            

                {{-- @foreach ($users as $user)
                    @if ($user->id === $review->userID)
                        <td class="others">{{$user->FirstName}} {{$user->LastName}}</td>
                    @endif
                @endforeach --}}
                <td class="others">{{$users[$i]->FirstName}} {{$users[$i]->LastName}}</td>

                <td class="others">{{$reviews[$i]->review}}</td>
                <td class="others">{{$reviews[$i]->rating}}</td>
                <td class="others">
                    @if ($current_user->id === $users[$i]->id or $current_user->role === 'admin')
                        <a class="table-buttons" href="{{route('reviews.edit', $reviews[$i]->id)}}" > <input type="button" value="{{__('text.edit')}}"> </a>
                    @endif
                </td>
                <td class="others">
                    @if ($current_user->id === $users[$i]->id or $current_user->role === 'admin')
                        <form action="{{ route('reviews.destroy', $reviews[$i]->id) }}" method="POST">
                            @csrf
                            {{method_field('DELETE')}}
                            <input class="table-buttons float-left" type="submit" value="{{__('text.delete')}}">
                        </form>
                    @endif
                </td>
            </tr>
            

            {{-- @endforeach --}}
            @endfor
    
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