<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="!mt-3">
            <input name="current_password" id="update_password_current_password" type="password" class="w-full text-sm px-4 py-3 rounded outline-none border-2 border-gray-200 focus:border-blue-500"
                placeholder="Current password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="!mt-3">
            <input name="password" id="update_password_password" type="password" class="w-full text-sm px-4 py-3 rounded outline-none border-2 border-gray-200 focus:border-blue-500"
                placeholder="New password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div class="!mt-3">
            <input name="password_confirmation" id="update_password_password_confirmation" type="password" class="w-full text-sm px-4 py-3 rounded outline-none border-2 border-gray-200 focus:border-blue-500"
                placeholder="Confirm password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="!mt-7">
            <button type="submit"
                class="w-full py-2.5 px-4 text-sm rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                {{ __('Save') }}
            </button>
        </div>

        @if (session('status') === 'password-updated')
            <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2500)" 
                class="space-y-6 mt-4 absolute top-0 right-4 -translate-y-3">
                <div class="shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] text-black flex w-max max-w-sm rounded overflow-hidden" role="alert">
                    <div class="flex items-center px-4 bg-green-500">
                        <x-tabler-circle-check-filled class="w-6 h-6 text-white inline" />
                    </div>
                    <div class="py-2 sm:inline text-sm font-semibold mx-4">
                        <p class="text-gray-600">{{ __('Update successfully') }}</p>
                        <p class="text-xs font-normal text-gray-400">{{ __('Your Password is now updated!') }}</p>
                    </div>
                </div>
            </div>
        @endif
    </form>
</section>
