@extends('layouts.app1')

@section('HeadContent')
@endsection

@section('SideNavContent')
    {{!! Form::open(['action' => 'ProductsController@filter', 'method' => 'get']) !!}}
    <div class="label-div">
        {{Form::label('SmallD', 'Diameter - from:', ['class' => 'label']) }}
        <br>
        {{Form::number('SmallD', '', ['class' => 'input','step' => '1']) }}
    </div>
    <div class="label-div">
        {{Form::label('LargeD', 'to:', ['class' => 'yolo']) }}
        <br>
        {{Form::number('LargeD', '', ['class' => 'input','step' => '1']) }}
    </div>


    <div class="label-div">
        {{Form::label('type', 'Type', ['class' => 'label']) }}


{!! Form::select('type', $types,  null, ['class' => 'input']) !!}

    </div>
    <div class="label-div">
        {{Form::label('color', 'Color', ['class' => 'label']) }}

{!! Form::select('color', $colors, null, ['class' => 'input']) !!}

    </div>
    <div class="label-div">
        {{Form::label('cheap', 'Price - from:', ['class' => 'label']) }}
        <br>
        {{Form::number('cheap', '', ['class' => 'input','step' => '0.01']) }}
    </div>
    <div class="label-div">
        {{Form::label('exp', 'to:', ['class' => 'label']) }}
        <br>
        {{Form::number('exp', '', ['class' => 'input' ,'step' => '0.01']) }}
    </div>
    <div class="filter-button input">
        {{Form::submit('Find', ['class' => 'addfilter']) }}
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
                    <div class="middletext">
                        <div class="clear">{{$product->productname}}</div>
                        <br>
                           <div class="clear"> {{$product->producttype}} /
                            {{$product->productcolor}} /
                            {{$product->productdiameter}} mm</div>
                        <br><div>
                        <div >{{$product->productprice}} €</div> </div>
                    </div>
                </div>
                <br>
                <div class="product-form">

                    <form action="{{route('cart', ['id' => $product->id])}}">

                        <label class="amount" for="amount">Amount: </label>
                        <input class="input-product inline" type="number" name="amount" input value="0">
                        <div class= "float_right" >
                        <input class= "add inline" type="submit" value="Add to cart">
                        </div>
                    </form>

                    {{-- <a href="{{route('reviews.index', $product->id)}}" > <input type="button" value="{{$product->id}}"> </a> --}}
                    {{-- <a href="/reviews/"+{{$product->id}}> <input type="button" value="{{$product->id}}"> </a> --}}
                    <a href={{route('reviews.index', $product->id)}}> <input class="review" type="button" value="Reviews"> </a>
                    {{-- <a href="{{route('reviews.index', ['id' => $product->id])}}"> <input type="button" value="Reviews"> </a> --}}
                </div>

        </div>
    @endforeach
</div>
@endsection
