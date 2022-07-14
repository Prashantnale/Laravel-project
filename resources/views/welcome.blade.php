<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <style>
            #img{
                background-image: url('https://wallpaperaccess.com/full/3214373.jpg');
                background-attachment: fixed;
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body id="img">
            @if (Route::has('login'))
            <div class="text-center mt-5">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-success m-2">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-info m-2">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </body>
</html>
