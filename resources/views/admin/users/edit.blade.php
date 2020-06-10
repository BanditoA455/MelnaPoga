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
    <input type="text" name="LasttName" value="{{$user->LastName}}">
    <br>
    <label for="email">E-mail</label>
    <input type="text" name="email" value="{{$user->email}}">
    <br>
    <label for="">Valsts</label>
    <br>
    <label for="">Pilsēta vai Pagasts</label>
    <br>
    <label for="">Iela</label>
    <br>
    <label for="">Dzīvokļa numurs</label>
    <br>
    <input type="submit" value="Submit">
    </form>
   
@endsection