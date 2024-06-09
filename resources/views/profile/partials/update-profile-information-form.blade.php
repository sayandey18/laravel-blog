<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="mt-4">
            <input name="name" id="name" type="text" class="w-full text-sm px-4 py-3 rounded outline-none border-2 border-gray-200 focus:border-blue-500"
                placeholder="Name" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <input name="email" id="email" type="email" class="w-full text-sm px-4 py-3 rounded outline-none border-2 border-gray-200 focus:border-blue-500"
                placeholder="Email address" value="{{ old('email', $user->email) }}" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div class="mt-4">
                <p class="text-sm text-gray-700">
                    {{ __('Please confirm your email address.') }}

                    <button form="send-verification" class="underline text-sm text-gray-600 ml-1 hover:text-blue-500">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            </div>
        @else
            <div class="mt-4">
                <p class="text-sm text-gray-700">
                    {{ __('Hooray! :name, Your email address has been verified. Your account is now fully secure.', ['name' => old('name', $user->name)]) }}
                </p>
            </div>
        @endif

        <div class="!mt-7">
            <button type="submit"
                class="w-full py-2.5 px-4 text-sm rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                {{ __('Save') }}
            </button>
        </div>

        @if (session('status') === 'profile-updated')
            <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2500)" 
                class="space-y-6 mt-4 absolute top-0 right-4 -translate-y-3">
                <div class="shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] text-black flex w-max max-w-sm rounded overflow-hidden" role="alert">
                    <div class="flex items-center px-4 bg-green-500">
                        <x-tabler-circle-check-filled class="w-6 h-6 text-white inline" />
                    </div>
                    <div class="py-2 sm:inline text-sm font-semibold mx-4">
                        <p class="text-gray-600">{{ __('Update successfully') }}</p>
                        <p class="text-xs font-normal text-gray-400">{{ __('Your profile information updated!') }}</p>
                    </div>
                </div>
            </div>
        @endif
    </form>
</section>
