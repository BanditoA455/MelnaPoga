@extends('layouts.app1')

@section('HeadContent')

@endsection

@section('BodyContent')

    <form action="{{route('admin.users.update', $user)}}" method="POST">
        @csrf
        {{method_field('PUT')}}

        <label for="FirstName">{{__('text.first_name')}}</label>
        <input type="text" name="FirstName" value="{{$user->FirstName}}" required>
        <br>
        <label for="LasttName">{{__('text.last_name')}}</label>
        <input type="text" name="LastName" value="{{$user->LastName}}" required>
        <br>
        <label for="email">{{__('text.email')}}</label>   
        <input type="text" name="email" value="{{$user->email}}" required>
        <br>
        
        <label for="country">{{__('text.country')}}</label>
        <input type="text" name="country" value="{{$address->Country}}" required>
        <br>
        <label for="city" >{{__('text.city')}}</label>
        <input type="text" name="city" value="{{$address->City}}" required>
        <br>
        <label for="street">{{__('text.street')}}</label>
        <input type="text" name="street" value="{{$address->Street}}" required>
        <br>
        <label for="number">{{__('text.house_number')}}</label>
        <input type="text" name="number" value="{{$address->number}}" required>
        <br>
        <input type="submit" value="{{__('text.submit')}}">

    </form>
   
@endsection