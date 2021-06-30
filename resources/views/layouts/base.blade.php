<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Security first is an Open Source Incident Registration System">
        <meta name="keywords" content="admin template, Incidentregistratie, beveiliging, security, incidenten, registratie, web app">
        <meta name="author" content="DeDaaf">

        @yield('head')

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('/dist/css/app.css') }}" />

       
        
    </head>

    <body class="main font-sans antialiased">
            
        
            @yield('body')
            
            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>
            <script src="{{ mix('dist/js/app.js') }}" defer></script>
            <!-- END: JS Assets-->
            @yield('script')
    </body>
</html>
    