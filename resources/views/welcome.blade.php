<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" href="css/index.css" /> --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/styles.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/reset.css') }}">
        <title>Laravel</title>

    </head>
    <body>
        <div class="header">
            <h1><strong>Melnā poga</strong></h1>
        </div>
        <div>
            <ul>
                <li class="float_left"><a href="#" class="navbar_item">Home</a></li>
                <li class="float_left"><a href="#" class="navbar_item">Support</a></li>
                <li class="float_left"><a href="#" class="navbar_item">About</a></li>
                <li class="float_right"><a href="#" class="navbar_item">Register</a></li>
                <li class="float_right"><a href="#" class="navbar_item">Log in</a></li>
              </ul>
        </div>
    </body>
</html>
