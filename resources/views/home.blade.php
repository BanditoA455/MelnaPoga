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

    @foreach ( $products as $product)
        <div class="product">
            <ul>
                <div class="float-left product-picture"><img src={{asset('images/'.$product->id.'.jpg')}} alt="{{$product->productname}}"></div>
                <div class="float-left product-text">
                    <li>Products name: {{$product->productname}}</li>
                    <li>Products type: {{$product->producttype}}</li>
                    <li>Products color: {{$product->productcolor}}</li>
                    <li>Products diameter: {{$product->productdiameter}} mm</li>
                    <li>Products price: {{$product->productprice}} eur</li>
                </div>
                <div class="float-right product-form">
                    <a href="{{route('cart.index', $product)}}" > <input type="button" value="Edit"> </a>
                    <form action="{{route('cart.index', $product)}}">
                        <label for="amount"> Amount </label>
                        <input type="number" name="amount">
                        <br>
                        <input type="submit" value="Add to cart">

                    </form>
                </div>
            </ul>
        </div>
    @endforeach
    
@endsection
