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
        <div class="products">
            <ul>
                <div class="float-left product-picture"><img src={{asset('images/'.$product->id.'.jpg')}} alt="{{$product->productname}}"></div>
                <div class="float-left product-text">
                    <li>{{$product->productname}}</li>
                    <li>{{$product->producttype}}</li>
                    <li>{{$product->productcolor}}</li>
                    <li>{{$product->productdiameter}}</li>
                    <li>{{$product->productprice}}</li>
                </div>
            </ul>
        </div>
    @endforeach
    
@endsection
