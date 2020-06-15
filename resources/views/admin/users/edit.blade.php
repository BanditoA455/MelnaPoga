@extends('layouts.app2')

@section('HeadContent')

@endsection

@section('BodyContent')

    <form action="{{route('admin.users.update', $user)}}" method="POST">
        @csrf
        {{method_field('PUT')}}

        <label for="FirstName">First name</label>
        <input type="text" name="FirstName" value="{{$user->FirstName}}">
        <br>
        <label for="LasttName">Last name</label>
        <input type="text" name="LastName" value="{{$user->LastName}}">
        <br>
        <label for="email">E-mail</label>   
        <input type="text" name="email" value="{{$user->email}}">
        <br>
        
        <label for="country">Country</label>
        <input type="text" name="country" value="{{$address->Country}}">
        <br>
        <label for="city" >City</label>
        <input type="text" name="city" value="{{$address->City}}">
        <br>
        <label for="street">Street</label>
        <input type="text" name="street" value="{{$address->Street}}">
        <br>
        <label for="number">House number</label>
        <input type="text" name="number" value="{{$address->number}}">
        <br>
        <input type="submit" value="Submit">

    </form>
   
@endsection