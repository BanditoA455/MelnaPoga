<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset("css/template.css") }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/reset.css') }}">
        <script type="text/javascript" src="{{ URL::asset('js/javascript.js') }}"></script>

        <title>Laravel</title>
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
                <li class="float_left"><a href="{{ route('admin.users.index') }}" class="navbar_item">Users</a></li>

                <li class="float_right"><a href="{{ url('/register') }}" class="navbar_item">Register</a></li>
                <li class="float_right"><a href="{{ url('/login') }}" class="navbar_item">Log in</a></li>
              </ul>
        </div>

        @yield('BodyContent')

    </body>
</html>
