@extends('layouts.app1')

@section('HeadContent')
@endsection

@section('SideNavContent')
    {{!! Form::open(['action' => 'ProductsController@display', 'method' => 'POST']) !!}}
    <div class="label-div">
        {{Form::label('SmallD', 'Smallest diameter', ['class' => 'label']) }}
        <br>
        {{Form::text('SmallD', '', ['class' => 'input']) }}
    </div>
    <div class="label-div">
        {{Form::label('LargeD', 'Largest diameter', ['class' => 'label']) }}
        <br>
        {{Form::text('LargeD', '', ['class' => 'input']) }}
    </div>
    <div class="label-div">
        {{Form::label('type', 'Type', ['class' => 'label']) }}
        <br>
        {{Form::select('type', ['class' => 'input']) }}
    </div>
    <div class="label-div">
        {{Form::label('cheap', 'Cheapest:', ['class' => 'label']) }}
        <br>
        {{Form::number('cheap', '', ['class' => 'input']) }}
    </div>
    <div class="label-div">
        {{Form::label('exp', 'Most expensive:', ['class' => 'label']) }}
        <br>
        {{Form::number('exp', '', ['class' => 'input']) }}
    </div>
    <div class="filter-button">
        {{Form::submit('Add filters') }}
    </div>
    {{!! Form::close() !!}}
@endsection

@section('BodyContent')

<div  class="container">
    @foreach ( $products as $product)
        <div class= "product">
                <div class="float-left"><img class=" product-picture"  src={{asset('images/'.$product->id.'.jpg')}} alt="{{$product->productname}}"></div>
                <div class=" product-text">
                <ul>
                    <li> {{$product->productname}} </li>
                     {{$product->producttype}} /
                     {{$product->productcolor}} /
                    {{$product->productdiameter}} mm
                    <li> {{$product->productprice}} €</li>
                    </ul>
                </div>
                <br>
                <div class=" product-form">
                    <a href="{{route('cart', $product)}}" > <input type="button" value="Edit"> </a>
                    <form action="{{route('cart', ['id' => $product->id])}}">
                        <label for="amount"> Amount </label>
                        <input type="number" name="amount">
                        <br>
                        <input type="submit" value="Add to cart">

                    </form>
                </div>

        </div>
    @endforeach
</div>
@endsection
