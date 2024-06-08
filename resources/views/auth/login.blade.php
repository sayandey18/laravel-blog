<x-guest-layout>
    <x-auth-session-status :status="session('status')" />

    <div class="flex flex-col items-center justify-center py-6 px-4">
        <div class="max-w-md w-full border py-8 px-6 rounded border-gray-300 bg-white shadow-md">
            <a href="javascript:void(0)">
                <img src="{{ asset('/assets/images/mm-logo.svg') }}" alt="logo" class='w-40 mb-7' />
            </a>
            <h2 class="text-left text-3xl font-extrabold">
                {{ __('Login with account') }}
            </h2>
            <form method="POST" action="{{ route('login') }}" class="mt-5 space-y-4">
                @csrf
                <div class="mt-4">
                    <input name="email" id="email" type="email" class="w-full text-sm px-4 py-3 rounded outline-none border-2 border-gray-200 focus:border-blue-500"
                        placeholder="Email address" value="{{ old('email') }}" required autofocus autocomplete="email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <input name="password" id="password" type="password" class="w-full text-sm px-4 py-3 rounded outline-none border-2 border-gray-200 focus:border-blue-500"
                        autocomplete="current-password" required placeholder="Password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="flex items-center justify-between gap-4">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox"
                            class="h-4 w-4 shrink-0 text-blue-600 focus:ring-1 focus:ring-blue-500 border-gray-300 rounded" />
                        <label for="remember_me" class="ml-3 block text-sm">
                            {{ __('Remember me') }}
                        </label>
                    </div>
                    <div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:text-blue-500">
                                {{ __('Forgot Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
                <div class="!mt-7">
                    <button type="submit"
                        class="w-full py-2.5 px-4 text-sm rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                        {{ __('Log in') }}
                    </button>
                </div>
                <p class="text-sm mt-6 text-center">
                    {{ __('Don\'t have an account?') }}
                    <a href="{{ route('register') }}" class="text-blue-600 font-semibold hover:underline ml-1">
                        Register here
                    </a>
                </p>
            </form>
        </div>
    </div>
</x-guest-layout>
