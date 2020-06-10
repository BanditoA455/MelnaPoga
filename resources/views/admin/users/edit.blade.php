@extends('layouts.app1')

@section('HeadContent')

@endsection

@section('BodyContent')
    <h1>Edit user {{$user -> FirstName}}</h1>
    {{-- <form action="{{route('admin.users.update', $user)}}" method="POST
    @csrf    
    {{method_field('PUT')}}
    @foreach

    @foreacg

    </form> --}}
   
@endsection