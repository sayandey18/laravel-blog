<x-guest-layout>
    @if (session('status') == 'verification-link-sent')
        <div class="max-width-md flex items-center justify-center my-2">
            <div class="font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        </div>
    @endif
    
    <div class="flex flex-col items-center justify-center py-6 px-4">
        <div class="max-w-md w-full border py-8 px-6 rounded border-gray-300 bg-white shadow-md">
            <a href="javascript:void(0)">
                <img src="{{ asset('/assets/images/mm-logo.svg') }}" alt="logo" class='w-40 mb-7' />
            </a>
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>
            <form method="POST" action="{{ route('verification.send') }}" class="mt-5 space-y-4">
                @csrf
                <div class="!mt-7">
                    <button type="submit"
                        class="w-full py-2.5 px-4 text-sm rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                        {{ __('Resend Verification Email') }}
                    </button>
                </div>
            </form>

            <div class="flex items-center justify-center mt-4">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                        class="text-sm text-blue-600 hover:text-blue-500">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
