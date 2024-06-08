<x-guest-layout>
    <div class="flex flex-col items-center justify-center py-6 px-4">
        <div class="max-w-md w-full border py-8 px-6 rounded border-gray-300 bg-white shadow-md">
            <a href="javascript:void(0)">
                <img src="{{ asset('/assets/images/mm-logo.svg') }}" alt="logo" class='w-40 mb-7' />
            </a>
            <div class="mb-4 text-sm text-gray-600">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>
            <form method="POST" action="{{ route('password.confirm') }}" class="mt-5 space-y-4">
                @csrf
                <div class="mt-4">
                    <input name="password" id="password" type="password" class="w-full text-sm px-4 py-3 rounded outline-none border-2 border-gray-200 focus:border-blue-500"
                        placeholder="Password" autocomplete="current-password" required />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="!mt-7">
                    <button type="submit"
                        class="w-full py-2.5 px-4 text-sm rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                        {{ __('Confirm') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
