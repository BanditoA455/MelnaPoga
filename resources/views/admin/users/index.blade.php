@extends('layouts.app1')

@section('BodyContent')
    <h1>Admin controlls the users</h1>
    <h1>muhahahahahah</h1>
    @foreach ( $users as $user)
        {{$user->name}} - {{$user->email}}
    @endforeach
@endsection