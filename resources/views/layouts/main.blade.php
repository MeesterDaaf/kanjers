@extends('layouts.base')
    @section('body')
    <div class="min-h-screen">
        {{-- @include('layouts.navigation') --}}
        
        <!-- Page Heading -->
        {{-- <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header> --}}
        
        <!-- Page Content -->
        
        <main class="dark">
                @yield('main')
                {{-- @include('layouts.components.dark-mode-switcher') --}}
            </main>
        </div>
    @endsection

        
