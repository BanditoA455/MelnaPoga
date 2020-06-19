@extends('layouts.app1')

@section('BodyContent')
    <div class="cout">{{$user->FirstName}} {{__('text.usergreeting')}} </div>
<div class="outer">

<div class="inner">
<div class="boxx inner">
    <div>
        <img class="userimage" src="/avatars/{{$user->avatar}}" alt="Profile picture">
        <div>
            <form enctype="multipart/form-data" action="{{route('profile.avatar')}}" method="POST">
                @csrf
                <label class="pad" for="avatar"> {{__('text.update_pic')}} </label>
                <div class="pad">
                <input  type="file" name="avatar" >
                <input  type="submit" value="{{__('text.submit')}}">
                </div>
            </form>
        </div>
    </div>



        <form action="{{route('admin.users.update', $user)}}" method="POST">
            @csrf
            {{method_field('PUT')}}

            <label for="FirstName">{{__('text.first_name')}}</label>
            <input class="pad" type="text" name="FirstName" value="{{$user->FirstName}}">
            <br>
            <label for="LasttName">{{__('text.last_name')}}</label>
            <input class="pad" type="text" name="LastName" value="{{$user->LastName}}">
            <br>
            <label for="email">{{__('text.email')}}</label>
            <input class="pad" type="text" name="email" value="{{$user->email}}">
            <br>

            <label for="country">{{__('text.country')}}</label>
            <input class="pad" type="text" name="country" value="{{$address->Country}}">
            <br>
            <label for="city" >{{__('text.city')}}</label>
            <input class="pad" type="text" name="city" value="{{$address->City}}">
            <br>
            <label for="street">{{__('text.street')}}</label>
            <input class="pad" type="text" name="street" value="{{$address->Street}}">
            <br>
            <label for="number">{{__('text.house_number')}}</label>
            <input class="pad" type="text" name="number" value="{{$address->number}}">
            <br>
            <br>
            <div class="outer">
            <input class="pad " type="submit" value="{{__('text.submit')}}">
            </div>

        </form>
        </div>
        <div class = "bottom">
        </div>
    </div>
</div>

@endsection
