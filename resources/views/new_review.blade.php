@extends('layouts.app2')

@section('BodyContent')

    <div class="cout">New review for: {{$product->productname}}</div>

    {{-- <form action="{{route('reviews.store')}}" method="POST"> --}}
    <form action="{{ route('reviews.store', $product->id) }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <label for="text">Enter the review</label>
        <br>
        <textarea name="text" cols="150" rows="20"></textarea>
        <br>
        <label for="rating">Rating (1 to 10)</label>
        <input type="number" step="0.01" min="0" max="10" name="rating">
        <br>
        <input class="" type="submit" value="Add review">
    </form>

@endsection