@extends('layouts.app1')

@section('HeadContent')
    <style>
        #customers {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }
        
        #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        }
        
        #customers tr:nth-child(even){background-color: #f2f2f2;}
        
        #customers tr:hover {background-color: #ddd;}
        
        #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
        }
    </style>
@endsection

@section('BodyContent')
    <h1>Admin controlls the users</h1>
    <h1>muhahahahahah</h1>

    <table id="customers">
        <tr>
            <th>#</th>
            <th>First name</th>
            <th>Last name</th>
            <th>email</th>
            <th>Actions</th>
        </tr>

        @foreach ( $users as $user)
        <tr>
            <td>{{$user->UserID}}</td>
            <td>{{$user->FirstName}}</td>
            <td>{{$user->LastName}}</td>
            <td>{{$user->email}}</td>
            <td>
            <a href="{{route('admin.users.edit', $user->UserID)}}" > <input type="button" value="Edit"> </a>
            <a href="{{route('admin.users.destroy', $user->UserID)}}" > <input type="button" value="Delete"> </a>
            </td>
        </tr>
        {{$user->FirstName}} - {{$user->email}}

        @endforeach

    </table>

   
@endsection