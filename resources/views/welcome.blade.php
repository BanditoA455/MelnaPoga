<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" href="css/index.css" /> --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/styles.css') }}">
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
                <li class="float_left"><a href="#" class="navbar_item">Home</a></li>
                <li class="float_left"><a href="#" class="navbar_item">Support</a></li>
                <li class="float_left"><a href="#" class="navbar_item">About</a></li>
                <li class="float_right"><a href="#" class="navbar_item">Register</a></li>
                <li class="float_right"><a href="#" class="navbar_item">Log in</a></li>
              </ul>
        </div>
        <div id="sidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="sidenav_close()">&times;</a>

            {{!! Form::open(['action' => 'ProductsController@display', 'method' => 'POST']) !!}
                <div class="label-div">
                    {{Form::label('name', 'Name', ['class' => 'label']) }}
                    <br>
                    {{Form::text('name', '', ['class' => 'input']) }}
                </div>
                <div class="label-div">
                    {{Form::label('type', 'Type', ['class' => 'label']) }}
                    <br>
                    {{Form::select('type', ['L' => 'large', 'XL' => 'extra large', 'class' => 'input']) }}
                </div>
                <div class="label-div">
                    {{Form::label('start', 'Cheapest:', ['class' => 'label']) }}
                    <br>
                    {{Form::number('start', '', ['class' => 'input']) }}
                </div> 
                <div class="label-div">
                    {{Form::label('end', 'Most expensive:', ['class' => 'label']) }}
                    <br>
                    {{Form::number('end', '', ['class' => 'input']) }}
                </div>
                <div class="filter-button">
                   {{Form::submit('Add filters') }}
                </div>
            {!! Form::close() !!}  

        </div>
        <h1>lshdfls</h1>

    </body>
</html>
