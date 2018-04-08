<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HRM @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        {{-- Using Bootstrap --}}
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
        {{-- Displaying Menubar --}}
        @extends('layout.menubar')

        <div class="row" style="margin-top: 5%;">

            <div class="col-md-9">
                @section('body')
                @show
            </div>
            <div class="col-md-3">
                @section('sidebar')
                @show
            </div>
        </div>
        <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div>
        </div>
        {{-- JS Files For Bootstrap --}}
        <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
         <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>
