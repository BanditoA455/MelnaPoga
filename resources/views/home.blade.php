@extends('layouts.app1')

@section('HeadContent')
@endsection

@section('SideNavContent')
    {{!! Form::open(['action' => 'ProductsController@filter', 'method' => 'get']) !!}}
    <div class="label-div">
        {{Form::label('SmallD', 'Smallest diameter', ['class' => 'label']) }}
        <br>
        {{Form::number('SmallD', '', ['class' => 'input','step' => '1']) }}
    </div>
    <div class="label-div">
        {{Form::label('LargeD', 'Largest diameter', ['class' => 'yolo']) }}
        <br>
        {{Form::number('LargeD', '', ['class' => 'input','step' => '1']) }}
    </div>


    <div class="label-div">
        {{Form::label('type', 'Type', ['class' => 'label']) }}

        {{-- <select class="form-control" name="type" id="type" data-parsley-required="true">
            @foreach ($types as $types)
                <option value="{{ $types }}">{{ $types }}</option>
            @endforeach
        </select> --}}
{!! Form::select('type', $types,  null, ['class' => 'input']) !!}

    </div>
    <div class="label-div">
        {{Form::label('color', 'Color', ['class' => 'label']) }}
        <br>
        {{-- <select class="form-control" name="color" id="color" data-parsley-required="true">
            @foreach ($colors as $colors)
                <option value="{{ $colors }}">{{ $colors }}</option>
            @endforeach
        </select> --}}
{!! Form::select('color', $colors, null, ['class' => 'input']) !!}

    </div>
    <div class="label-div">
        {{Form::label('cheap', 'Cheapest:', ['class' => 'label']) }}
        <br>
        {{Form::number('cheap', '', ['class' => 'input','step' => '0.01']) }}
    </div>
    <div class="label-div">
        {{Form::label('exp', 'Most expensive:', ['class' => 'label']) }}
        <br>
        {{Form::number('exp', '', ['class' => 'input' ,'step' => '0.01']) }}
    </div>
    <div class="filter-button">
        {{Form::submit('Add filters') }}
    </div>
    {{!! Form::close() !!}}

@endsection

@section('BodyContent')
    @guest
        <div class="cout">std::cout << "Hello, World!" << endl;</div>
    @else
        <div class="cout">std::cout << "Hello, {{$user->FirstName ?? 'World'}}!" << endl;</div>
    @endguest


<div  class="container">

    @foreach ( $products as $product)
        <div class= "product">
                <div class="float-left"><img class=" product-picture"  src={{asset('images/'.$product->id.'.jpg')}} alt="{{$product->productname}}"></div>
                <div class=" product-text">
                    <ul>
                        <li>{{$product->productname}}</li>
                            {{$product->producttype}} /
                            {{$product->productcolor}} /
                            {{$product->productdiameter}} mm
                        <li>{{$product->productprice}} €</li>
                    </ul>
                </div>
                <br>
                <div class="product-form">

                    <form action="{{route('cart', ['id' => $product->id])}}">

                        <label for="amount"> Amount </label>
                        <input type="number" name="amount">
                        <br>
                        <input type="submit" value="Add to cart">
                    </form>

                    {{-- <a href="{{route('reviews.index', $product->id)}}" > <input type="button" value="{{$product->id}}"> </a> --}}
                    {{-- <a href="/reviews/"+{{$product->id}}> <input type="button" value="{{$product->id}}"> </a> --}}
                    <a href={{route('reviews', $product->id)}}> <input type="button" value="{{$product->id}}"> </a>
                </div>

        </div>
    @endforeach
</div>
@endsection
