<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Style -->
        @vite(['resources/css/app.css'])
        @stack('style')
    </head>
    <body >
        <header class="flex shadow-lg py-4 px-4 sm:px-10 bg-white min-h-[70px] tracking-wide relative z-50">
            <div class="flex flex-wrap items-center justify-between gap-4 w-full">
                <a href="{{ url('/') }}" class="lg:absolute max-lg:left-10 lg:top-2/4 lg:left-2/4 lg:-translate-x-1/2 lg:-translate-y-1/2">
                    <img src="{{ asset('/assets/images/mm-logo.svg') }}" alt="logo" class="w-40" />
                </a>

                <div id="collapseMenu" class="max-lg:hidden lg:!block max-lg:w-full max-lg:fixed max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50">
                    <button id="toggleClose" class="lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3">
                        <x-tabler-x class="w-6 h-6 text-[#333]" />
                    </button>

                    <ul class="lg:flex lg:gap-x-5 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50">
                        <li class="mb-6 hidden max-lg:block">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('/assets/images/mm-logo.svg') }}" alt="logo" class="w-36" />
                            </a>
                        </li>
                        <li class="max-lg:border-b max-lg:py-3 px-3">
                            <a href="javascript:void(0)" class="hover:text-[#007bff] text-[#007bff] block font-semibold text-[15px]">Home</a>
                        </li>
                        <li class="max-lg:border-b max-lg:py-3 px-3"><a href="javascript:void(0)" class="hover:text-[#007bff] text-[#333] block font-semibold text-[15px]">Team</a></li>
                        <li class="max-lg:border-b max-lg:py-3 px-3"><a href="javascript:void(0)" class="hover:text-[#007bff] text-[#333] block font-semibold text-[15px]">Feature</a></li>
                        <li class="max-lg:border-b max-lg:py-3 px-3"><a href="javascript:void(0)" class="hover:text-[#007bff] text-[#333] block font-semibold text-[15px]">Blog</a></li>
                    </ul>
                </div>

                <div class="flex items-center ml-auto space-x-6">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ route('dashboard') }}">
                                <span class="inline-block px-4 py-2 text-sm rounded-sm font-bold text-white border-2 border-[#007bff] bg-[#007bff] transition-all ease-in-out duration-300 hover:bg-transparent hover:text-[#007bff]">
                                    {{ __('Dashboard') }}
                                </span>
                            </a>
                            @else
                                <a href="{{ url('/login') }}">
                                    <spam class="inline-block font-semibold text-[15px] border-none outline-none">
                                        {{ __('Login') }}
                                    </span>
                                </a>
                            @if (Route::has('register'))
                                <a href="{{ url('/register') }}">
                                    <span class="inline-block px-4 py-2 text-sm rounded-sm font-bold text-white border-2 border-[#007bff] bg-[#007bff] transition-all ease-in-out duration-300 hover:bg-transparent hover:text-[#007bff]">
                                        {{ __('Register') }}
                                    </span>
                                </a>
                            @endif
                        @endauth
                    @endif

                    <button id="toggleOpen" class="lg:hidden">
                        <x-tabler-menu-2 class="w-[1.85rem] h-[1.85rem] text-[#333]" />
                    </button>
                </div>
            </div>
        </header>

        <div class="h-96"></div>

        <footer class="bg-gradient-to-r from-gray-900 via-gray-700 to-gray-900 font-sans tracking-wide">
            <div class="py-12 px-12">
                <div class="flex flex-wrap items-center sm:justify-between max-sm:flex-col gap-6">
                    <div>
                        <a href="javascript:void(0)">
                            <img src="{{ asset('/assets/images/mm-logo.svg') }}" alt="logo" class="w-44" />
                        </a>
                    </div>

                    <ul class="flex items-center justify-center flex-wrap gap-y-2 md:justify-end space-x-6">
                        <li><a href="javascript:void(0)" class="text-gray-300 hover:underline text-base">Home</a></li>
                        <li><a href="javascript:void(0)" class="text-gray-300 hover:underline text-base">About</a></li>
                        <li><a href="javascript:void(0)" class="text-gray-300 hover:underline text-base">Services</a></li>
                        <li><a href="javascript:void(0)" class="text-gray-300 hover:underline text-base">Contact</a></li>
                    </ul>
                </div>

                <hr class="my-6 border-gray-500" />

                <p class="text-center text-gray-300 text-base">
                    Copyright © {{ now()->year }}
                    <a href="{{ url('/') }}" target="_blank" class="hover:underline mx-1">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </a>
                </p>
            </div>
        </footer>

        <!-- Script -->
        @vite(['resources/js/app.js'])
        @stack('scripts')
    </body>
</html>
