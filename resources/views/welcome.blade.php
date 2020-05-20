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
        <div class="divs">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#news">News</a></li>
                <li class="dropdown">
                  <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
                  <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                  </div>
                </li>
              </ul>
        </div>
        
          <p class="teksts">text</p>
        <h1>Laravel ir suc</h1>
        <h1>Laravel ir suc</h1>

    </body>
</html>
