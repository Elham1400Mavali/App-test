<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'نظر سنجی') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
{{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}
 <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <!-- Scripts -->
<script src="https://cdn.tailwindcss.com"></script>

     @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style xmlns="http://www.w3.org/1999/html">
        .counterContainer {
            width: auto;
            height: auto;
            position: absolute;
            top: 25px;
            right: 218px;
        }
        .counter {
            border-radius: 50%;
            background-color: rgb(255, 255, 255);
            box-shadow: 0px 0px 27.52px 4.48px rgba(161, 161, 161, 0.22);
            width: 70px;
            height: 70px;
        }
        img, svg {
            vertical-align: middle;
        }
        .counter circle {
            fill: transparent;
            stroke: rgb(39, 181, 234);
            stroke-width: 20px;
            stroke-dasharray: 330;
            stroke-dashoffset: 0;
        }
        .counterContainer span {
            font-size: 35px;
            color: rgb(33, 179, 234);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .steps {
            width: 100%;
            height: 100%;
        }
        fieldset {
            min-width: 8px;
            padding: 0;
            margin: 0;
            border: 0;
        }
        @media (max-width: 1440px) {
            .options {
                width: auto;
            }
        }
    </style>

</head>
<body >
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
           
			   <p class="text-center text-blue-800"> در صورت مشاهده هرگونه خطا یا اخطار اسکرین شات آن را به ایدی زیر در تلگرام ارسال فرمایید.
           @Developer_mavali
            </p>
			 @yield('content')
        </main>
    </div>
</body>
</html>
