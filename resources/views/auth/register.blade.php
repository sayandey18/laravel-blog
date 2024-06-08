<x-guest-layout>
    <x-auth-session-status :status="session('status')" />

    <div class="flex flex-col items-center justify-center py-6 px-4">
        <div class="max-w-md w-full border py-8 px-6 rounded border-gray-300 bg-white shadow-md">
            <a href="javascript:void(0)">
                <img src="{{ asset('/assets/images/mm-logo.svg') }}" alt="logo" class='w-40 mb-7' />
            </a>
            <h2 class="text-left text-3xl font-extrabold">
                {{ __('Register an account') }}
            </h2>
            <form method="POST" action="{{ route('register') }}" class="mt-5 space-y-4">
                @csrf
                <div class="mt-4">
                    <input name="name" id="name" type="text" class="w-full text-sm px-4 py-3 rounded outline-none border-2 border-gray-200 focus:border-blue-500"
                        placeholder="Name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <input name="email" id="email" type="email" class="w-full text-sm px-4 py-3 rounded outline-none border-2 border-gray-200 focus:border-blue-500"
                        placeholder="Email address" value="{{ old('email') }}" required autocomplete="email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <input name="password" id="password" type="password" class="w-full text-sm px-4 py-3 rounded outline-none border-2 border-gray-200 focus:border-blue-500"
                        placeholder="Password" autocomplete="new-password" required />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <input name="password_confirmation" id="password_confirmation" type="password" class="w-full text-sm px-4 py-3 rounded outline-none border-2 border-gray-200 focus:border-blue-500"
                        placeholder="Confirm Password" autocomplete="new-password" required />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div class="!mt-7">
                    <button type="submit"
                        class="w-full py-2.5 px-4 text-sm rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                        {{ __('Register') }}
                    </button>
                </div>
                <p class="text-sm mt-6 text-center">
                    {{ __('Already have an account?') }}
                    <a href="{{ route('login') }}" class="text-blue-600 font-semibold hover:underline ml-1">
                        Login here
                    </a>
                </p>
            </form>
        </div>
    </div>
</x-guest-layout>
