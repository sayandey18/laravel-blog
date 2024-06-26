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
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-50">
            <div class="w-full px-6 py-4 overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
        
        <!-- Script -->
        @vite(['resources/js/app.js'])
        @stack('scripts')
    </body>
</html>
