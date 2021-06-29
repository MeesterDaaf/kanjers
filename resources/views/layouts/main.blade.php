<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ $dark_mode ? 'dark' : '' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Security first is an Open Source Incident Registration System">
        <meta name="keywords" content="admin template, Incidentregistratie, beveiliging, security, incidenten, registratie, web app">
        <meta name="author" content="DeDaaf">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('/dist/css/app.css') }}" />

       
        
    </head>
    <body class="main font-sans antialiased">
        <div class="min-h-screen">
            {{-- @include('layouts.navigation') --}}

            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> --}}

            <!-- Page Content -->
            <main>
                @yield('content')
                {{-- @include('layouts.components.dark-mode-switcher') --}}
            </main>
        </div>
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ mix('dist/js/app.js') }}" defer></script>
        <!-- END: JS Assets-->
        @yield('script')

        
    </body>
</html>
