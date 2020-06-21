<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Riser-Africa') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--vuexy icons and fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('vuexy/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="stylesheet" href="{{ asset('vuexy/app-assets/images/ico/favicon.ico') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- vuexy -->
    <link rel="stylesheet" href="{{ asset('vuexy/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vuexy/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vuexy/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" href="{{ asset('vuexy/app-assets/css/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('vuexy/app-assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('vuexy/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" href="{{ asset('vuexy/app-assets/css/themes/semi-dark-layout.css') }}">
    <link rel="stylesheet" href="{{ asset('vuexy/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('vuexy/app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" href="{{ asset('vuexy/assets/css/style.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Riser-Africa') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
            @yield('content')
        </main>
    </div>
</body>
<!--vuexy js -->
<script src="{{ asset('vuexty/app-assets/vendors/js/vendors.min.js') }}" defer></script>
<script src="{{ asset('vuexty/app-assets/js/core/app-menu.js') }}" defer></script>
<script src="{{ asset('vuexty/app-assets/js/core/app.js') }}" defer></script>
<script src="{{ asset('vuexty/app-assets/js/scripts/components.js') }}" defer></script>
</html>
