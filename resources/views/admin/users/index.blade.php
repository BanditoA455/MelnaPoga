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
                <th class="first">Address</th>
                <th class="first" colspan="2">Actions</th>
            </tr>
            
            {{-- @foreach ( $users as $user) --}}
            @for ($i = 0; $i < count($users); $i++)
            <tr class="row">
                <td class="others">{{$users[$i]->id}}</td>
                <td class="others">{{$users[$i]->FirstName}}</td>
                <td class="others">{{$users[$i]->LastName}}</td>
                <td class="others">{{$users[$i]->email}}</td>
                <td class="others"> </td>
                {{-- {{$addresses[$i]->Country}} {{$addresses[$i]->City}} {{$addresses[$i]->Street}} {{$addresses[$i]->number}} --}}
                <td class="others">
                    @if ($users[$i]->role == 'user')
                        <a class="table-buttons" href="{{route('admin.users.edit', $users[$i]->id)}}" > <input type="button" value="Edit"> </a>
                    @endif
                </td>
                <td class="others">
                    @if ($users[$i]->role == 'user')
                        <form action="{{ route('admin.users.destroy', $users[$i]) }}" method="POST">
                            @csrf
                            {{method_field('DELETE')}}
                            <input class="table-buttons float-left" type="submit" value="Delete">
                        </form>
                    @endif   
                </td>
            </tr>
            {{-- @endforeach --}}
            @endfor
    
        </table>
    </div>

   
@endsection