<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="py-2 md:py-4">
        <div class="relative w-full mx-auto sm:px-2 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="p-6 text-gray-900 text-3xl font-semibold">
                    {{ __('Update Profile') }}
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 py-4">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg h-max">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg h-max">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
