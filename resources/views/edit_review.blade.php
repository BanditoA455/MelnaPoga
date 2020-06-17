@extends('layouts.app1')

@section('BodyContent')
    <div class="cout">edit</div>

    <form action="{{route('reviews.update', $review->id)}}" method="POST">
        @csrf
        {{method_field('PUT')}}

        <input type="hidden" name="userID" value="{{ $review->userID }}">
        <input type="hidden" name="productID" value="{{ $review->productID }}">

        <label for="text">{{__('text.enter_new_review')}}</label>
        <br>
        <textarea name="text" cols="150" rows="20" required>{{$review->review}}</textarea>
        <br>
        <label for="rating">{{__('text.new_rating')}}</label>
        <input type="number" step="0.01" min="0" max="10" name="rating" value="{{$review->rating}}" required>
        <br>
        <input class="" type="submit" value="{{__('text.edit_review')}}">

    </form>

@endsection