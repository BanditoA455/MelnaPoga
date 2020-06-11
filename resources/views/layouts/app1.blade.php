<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/styles.css') }}"> --}}
        <link href="{{ asset("css/template.css") }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/reset.css') }}">
        <script type="text/javascript" src="{{ URL::asset('js/javascript.js') }}"></script>
        @yield('HeadContent')

        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>
        <div class="header">
            <h1><strong>Melnā poga</strong></h1>
        </div>
        <div>
            <ul>
                <li class="float_left"><img id="logo" onclick="sidenav()" class="logo" src="/images/logo.png"></li>
                <li class="float_left"><a href="{{ url('/') }}" class="navbar_item">Home</a></li>
                <li class="float_left"><a href="{{ url('/support') }}" class="navbar_item">Support</a></li>
                <li class="float_left"><a href="{{ url('/about') }}" class="navbar_item">About</a></li>
                
                @can('manage-users')
                    <li class="float_left"><a href="{{ route('admin.users.index') }}" class="navbar_item">Users</a></li>
                @endcan

                @guest
                
                
                @if (Route::has('register'))
                    <li class="float_right"><a href="{{ route('register') }}" class="navbar_item">Register</a></li>
                    <li class="float_right"><a href="{{ route('login') }}" class="navbar_item">Log in</a></li>
                @endif
                
                @else
                    <li class="float_right">
                        <a class="navbar_item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
                    </li>
                @endguest
            </ul>
        </div>

        <div id="sidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="sidenav_close()">&times;</a> 
            @yield('SideNavContent') 
        </div>

        @include('alerts.alerts')
        @yield('BodyContent')

    </body>