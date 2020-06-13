@extends('layouts.app2')

@section('HeadContent')
@endsection

@section('BodyContent')

    <div class="cout">Here is the list of users</div>

    <div class="table">
        <table id="customers">
            <tr>
                <th class="first">#</th>
                <th class="first">First name</th>
                <th class="first">Last name</th>
                <th class="first">email</th>
                <th class="first">Actions</th>
            </tr>
            @foreach ( $users as $user)
            <tr class="row">
                <td class="others">{{$user->id}}</td>
                <td class="others">{{$user->FirstName}}</td>
                <td class="others">{{$user->LastName}}</td>
                <td class="others">{{$user->email}}</td>
                <td class="others">
                @if ($user->role == 'user')
    
                <a class="table-buttons" href="{{route('admin.users.edit', $user->id)}}" > <input type="button" value="Edit"> </a>
                <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
    
                    <input class="table-buttons float-left" type="submit" value="Delete">
                </form>
                
                @endif
                </td>
            </tr>
            @endforeach
    
        </table>
    </div>

   
@endsection