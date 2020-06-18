@extends('layouts.app1')

@section('BodyContent')
    <div class="cout">{{$user->FirstName}} welcome to youre profile page</div>

    <div>
        <form action="{{route('admin.users.update', $user)}}" method="POST">
            @csrf
            {{method_field('PUT')}}
    
            <label for="FirstName">{{__('text.first_name')}}</label>
            <input type="text" name="FirstName" value="{{$user->FirstName}}">
            <br>
            <label for="LasttName">{{__('text.last_name')}}</label>
            <input type="text" name="LastName" value="{{$user->LastName}}">
            <br>
            <label for="email">{{__('text.email')}}</label>   
            <input type="text" name="email" value="{{$user->email}}">
            <br>
            
            <label for="country">{{__('text.country')}}</label>
            <input type="text" name="country" value="{{$address->Country}}">
            <br>
            <label for="city" >{{__('text.city')}}</label>
            <input type="text" name="city" value="{{$address->City}}">
            <br>
            <label for="street">{{__('text.street')}}</label>
            <input type="text" name="street" value="{{$address->Street}}">
            <br>
            <label for="number">{{__('text.house_number')}}</label>
            <input type="text" name="number" value="{{$address->number}}">
            <br>
            <input type="submit" value="{{__('text.submit')}}">
    
        </form>
    </div>
    

@endsection