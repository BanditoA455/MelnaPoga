@extends('layouts.app1')

@section('HeadContent')
@endsection

@section('NavBarImage')
    <li class="float_left"><img id="logo" onclick="sidenav()" class="logo" src="/images/logo.png"></li>
@endsection

@section('SideNavContent')
    {{!! Form::open(['action' => 'ProductsController@filter', 'method' => 'get']) !!}}
    <div class="label-div">
        {{Form::label('SmallD', __('text.small_diameter'), ['class' => 'label']) }}
        <br>
        {{Form::number('SmallD', '', ['class' => 'input','step' => '1']) }}
    </div>
    <div class="label-div">
        {{Form::label('LargeD', __('text.large_diameter'), ['class' => 'yolo']) }}
        <br>
        {{Form::number('LargeD', '', ['class' => 'input','step' => '1']) }}
    </div>


    <div class="label-div">
        {{Form::label('type', __('text.type'), ['class' => 'label']) }}
        <br>

{!! Form::select('type', $types,  null, ['class' => 'input']) !!}

    </div>
    <div class="label-div">
        {{Form::label('color', __('text.color'), ['class' => 'label']) }}
        <br>
    {!! Form::select('color', $colors, null, ['class' => 'input']) !!}

    </div>
    <div class="label-div">
        {{Form::label('cheap', __('text.cheapest'), ['class' => 'label']) }}
        <br>
        {{Form::number('cheap', '', ['class' => 'input','step' => '0.01']) }}
    </div>
    <div class="label-div">
        {{Form::label('exp', __('text.expensive'), ['class' => 'label']) }}
        <br>
        {{Form::number('exp', '', ['class' => 'input' ,'step' => '0.01']) }}
    </div>
    <div class="filter-button input">
        {{Form::submit(__('text.add_filters'), ['class' => 'addfilter']) }}
    </div>
    {{!! Form::close() !!}}

@endsection

@section('BodyContent')
    @guest
        <div class="cout">std::cout << "{{ __('text.hello') }}, {{__('text.world')}}!" << endl;</div>
    @else
        <div class="cout">std::cout << "{{__('text.hello')}}, {{$user->FirstName}}!" << endl;</div>
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

                    <form action="{{route('cart.store', ['id' => $product->id])}}" method="POST">
                    {{-- <form action="{{route('cart.store', $product->id )}}" method="POST"> --}}
                        @csrf
                        
                        <label class="amount" for="amount">{{__('text.amount')}} </label>
                        <input class="input-product inline" type="number" name="amount" input value="0">
                        <div class= "float_right" >
                            <input class= "add inline" type="submit" value="{{__('text.addToCart')}}">
                        </div>

                    </form>
                    <a href={{route('reviews.index', $product->id)}}> <input class="review" type="button" value="{{__('text.reviews')}}"> </a>
                </div>

        </div>
    @endforeach
</div>

@endsection
