<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Style -->
        @vite(['resources/css/app.css'])
        @stack('style')
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Page Heading -->
            @if (isset($header))
                <header class="shadow">
                    @include('layouts.navigation')
                </header>
            @endif

            <!-- Page Content -->
            <main class="lg:ml-[250px]">
                {{ $slot }}
            </main>
        </div>

        <!-- Script -->
        @vite(['resources/js/app.js'])
        @stack('scripts')
    </body>
</html>
