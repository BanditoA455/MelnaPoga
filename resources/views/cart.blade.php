@extends('layouts.app1')

@section('HeadContent')
@endsection

@section('BodyContent')
    <h1 class="cout">{{__('text.user')}} {{$user->FirstName}} {{__('text.cart')}}</h1>

    <div class="table">
        <table id="customers">
            <tr>
                <th class="first">#</th>
                <th class="first">{{__('text.product_name')}}</th>
                <th class="first">{{__('text.amount')}}</th>
                <th class="first">{{__('text.actions')}}</th>
            </tr>
            @for ($i = 0 ; $i < count($products); $i++)
                <tr class="row">
                    <td class="others">{{$items[$i]->id}}</td>
                    <td class="others">{{$products[$i]->productname}}</td>
                    <td class="others">{{$items[$i]->amount}}</td>
                    <td class="others"> 
                        <form action="{{route('cart.destroy' ,[$items[$i]->id] )}} " method="POST">
                            @csrf
                            <input type="submit" value="{{__('text.remove')}}">
                        </form>
                    </td>
                </tr>
            @endfor
        </table>
    </div>

        <div class="review-form">
            <form action="{{route('order.store' )}} " method="POST">
                @csrf
                <input type="submit" value="{{__('text.buy')}}">
            </form>
        </div>

@endsection
