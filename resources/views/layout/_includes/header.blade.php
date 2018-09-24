<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'EasySell') }}</title>

        <!-- Icon -->
        <link rel="icon" href="{{ asset('img/favicon.ico') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!--Design menu disponivel em:
            https://bootsnipp.com/snippets/featured/responsive-navigation-menu
            Agradecimentos usuário ishwarkatwe - https://bootsnipp.com/ishwarkatwe
        -->
    </head>

    <body>
