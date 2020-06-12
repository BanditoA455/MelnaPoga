@extends('layouts.app2')

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
            <td>{{$user->id}}</td>
            <td>{{$user->FirstName}}</td>
            <td>{{$user->LastName}}</td>
            <td>{{$user->email}}</td>
            <td>
            @if ($user->role == 'user')
            <a href="{{route('admin.users.edit', $user->id)}}" > <input type="button" value="Edit"> </a>
            <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                @csrf
                {{method_field('DELETE')}}

                <input  type="submit" value="Delete">
            </form>
            
            @endif
            </td>
        </tr>
        @endforeach

    </table>

   
@endsection