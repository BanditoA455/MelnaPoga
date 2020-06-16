@extends('layouts.app2')

@section('BodyContent')

    <div class="cout">{{__('text.new_review')}} {{$product->productname}}</div>

    {{-- <form action="{{route('reviews.store')}}" method="POST"> --}}
    <form action="{{ route('reviews.store', $product->id) }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <label for="text">{{__('text.enter_new_review')}}</label>
        <br>
        <textarea name="text" cols="150" rows="20"></textarea>
        <br>
        <label for="rating">{{__('text.new_rating')}}</label>
        <input type="number" step="0.01" min="0" max="10" name="rating">
        <br>
        <input class="" type="submit" value="{{__('text.new_add_review')}}">
    </form>

@endsection