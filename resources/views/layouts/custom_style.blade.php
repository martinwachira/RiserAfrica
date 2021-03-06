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
    <link rel="stylesheet" href="{{ asset('vuexy/app-assets/css/plugins/forms/wizard.css') }}">
    <link rel="stylesheet" href="{{ asset('vuexy/assets/css/style.css') }}">
</head>
<body>

</body>
<script src="{{ asset('vuexy/app-assets/vendors/js/vendors.min.js') }}" ></script>

<script src="{{ asset('vuexy/app-assets/vendors/js/extensions/jquery.steps.min.js') }}" ></script>
<script src="{{ asset('vuexy/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}" ></script>
<!--vuexy js -->
<script src="{{ asset('vuexy/app-assets/js/core/app-menu.js') }}" ></script>
<script src="{{ asset('vuexy/app-assets/js/core/app.js') }}" ></script>
<script src="{{ asset('vuexy/app-assets/js/scripts/components.js') }}" ></script>

<script src="{{ asset('vuexy/app-assets/js/scripts/forms/wizard-steps.js') }}" ></script>

</html>