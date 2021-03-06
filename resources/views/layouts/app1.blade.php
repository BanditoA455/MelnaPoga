<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <ul class="header-back">
                <li class="float_right"><a class="header-item" href="/lang/lv">LV</a></li>
                <li class="float_right"><a class="header-item" href="/lang/en">EN</a></li>
            </ul>
        </div>
        <div>
            <ul class="navback">
                @yield('NavBarImage')
                <li class="float_left"><a href="{{ url('/') }}" class="navbar_item">{{__('text.home')}}</a></li>
                <li class="float_left"><a href="{{ url('/support') }}" class="navbar_item">{{__('text.support')}}</a></li>
                <li class="float_left"><a href="{{ url('/about') }}" class="navbar_item">{{__('text.about')}}</a></li>

                @can('manage-users')
                    <li class="float_left"><a href="{{ route('admin.users.index') }}" class="navbar_item">{{__('text.users')}}</a></li>
                @endcan

                @guest

                    @if (Route::has('register'))
                        <li class="float_right"><a href="{{ route('register') }}" class="navbar_item">{{__('text.register')}}</a></li>
                        <li class="float_right"><a href="{{ route('login') }}" class="navbar_item">{{__('text.login')}}</a></li>
                    @endif

                @else
                    <div class="dropdown float_right">
                        <a href="javascript:void(0)" class="dropbtn navbar_item">{{Auth::user()->FirstName}} {{Auth::user()->LastName}}</a>
                        <div class="dropdown_content">
                            <a href="{{ route('profile.index') }}" class="navbar_item">{{__('text.profile')}}</a>
                            <a class="navbar_item" href="{{ route('cart.index') }}">{{__('text.cart')}}</a>
                            <a class="navbar_item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('text.logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
                        </div>
                    </div>
                    <img class="float_right navbar_avatar" src="/avatars/{{Auth::user()->avatar}}" alt="Profile picture">
                    
                @endguest
            </ul>
        </div>

        <div id="sidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="sidenav_close()">&times;</a>
            @yield('SideNavContent')
        </div>

        
        @yield('BodyContent')

    </body>
