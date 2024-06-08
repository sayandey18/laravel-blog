<x-guest-layout>
    <x-auth-session-status :status="session('status')" />
    
    <div class="flex flex-col items-center justify-center py-6 px-4">
        <div class="max-w-md w-full border py-8 px-6 rounded border-gray-300 bg-white shadow-md">
            <a href="javascript:void(0)">
                <img src="{{ asset('/assets/images/mm-logo.svg') }}" alt="logo" class='w-40 mb-7' />
            </a>
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>
            <form method="POST" action="{{ route('password.email') }}" class="mt-5 space-y-4">
                @csrf
                <div class="mt-4">
                    <input name="email" id="email" type="email" class="w-full text-sm px-4 py-3 rounded outline-none border-2 border-gray-200 focus:border-blue-500"
                        placeholder="Email address" value="{{ old('email') }}" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="!mt-7">
                    <button type="submit"
                        class="w-full py-2.5 px-4 text-sm rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
