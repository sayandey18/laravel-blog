<nav x-data="{ open: false }" class="bg-white shadow-xl h-screen fixed top-0 left-0 min-w-[250px] py-6 px-4 overflow-auto">
    <div class="relative flex flex-col h-full">

        <div class="flex flex-wrap items-center cursor-pointer relative">
            <img src="{{ asset('/assets/images/mm-logo-square.svg') }}" class="w-10 h-10" />

            <div class="ml-4">
                <p class="text-sm text-gray-700 font-semibold">{{ __('MATRIX MEDIA') }}</p>
                <p class="text-xs text-gray-400 mt-0.5">{{ __('Administrator') }}</p>
            </div>
            <x-tabler-chevron-right class="w-5 h-5 mr-4 absolute right-0 text-gray-400" />
        </div>

        <hr class="my-6" />

        <div>
            <h4 class="text-sm text-gray-400 mb-4">{{ __('Insights') }}</h4>
            <ul class="space-y-4 px-2 flex-1">
                <li>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <x-tabler-dashboard class="w-5 h-5 mr-4" />
                        <span>{{ __('Dashboard') }}</span>
                    </x-nav-link>
                </li>
                <li>
                    <a href="javascript:void(0)"
                        class="text-sm flex items-center text-gray-500 hover:text-blue-600 transition-all">
                        <x-tabler-graph class="w-5 h-5 mr-4" />
                        <span>{{ __('Insight') }}</span>
                    </a>
                </li>
            </ul>
        </div>

        <hr class="my-6" />

        <div class="flex-1">
            <h4 class="text-sm text-gray-400 mb-4">{{ __('Media') }}</h4>
            <ul class="space-y-4 px-2 flex-1">
                <li>
                    <x-nav-link :href="route('posts.index')" :active="request()->routeIs('posts.index')">
                        <x-tabler-file-dots class="w-5 h-5 mr-4" />
                        <span>{{ __('Posts') }}</span>
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('categories.index')" :active="request()->routeIs('categories.index')">
                        <x-tabler-category class="w-5 h-5 mr-4" />
                        <span>{{ __('Categories') }}</span>
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('tags.index')" :active="request()->routeIs('tags.index')">
                        <x-tabler-tag class="w-5 h-5 mr-4" />
                        <span>{{ __('Tags') }}</span>
                    </x-nav-link>
                </li>
                <li>
                    <a href="javascript:void(0)"
                        class="text-sm flex items-center text-gray-500 hover:text-blue-600 transition-all">
                        <x-tabler-message-2-bolt class="w-5 h-5 mr-4" />
                        <span>{{ __('Comments') }}</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="mt-4">
            <ul class="space-y-4 px-2">
                <li>
                    <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                        <x-tabler-user-circle class="w-5 h-5 mr-4" />
                        <span>{{ __('Profile') }}</span>
                    </x-nav-link>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                            class="text-sm flex items-center text-gray-500 hover:text-blue-600 transition-all">
                            <x-tabler-logout class="w-5 h-5 mr-4" />
                            <span>{{ __('Log Out') }}</span>
                        </a>
                    </form>
                </li>
            </ul>

            <div class="flex flex-wrap items-center cursor-pointer border-t py-2 mt-6">
                <img src='https://readymadeui.com/team-2.webp' class="w-10 h-10 rounded-md border-2 border-white" />
                <div class="ml-4">
                    <p class="text-sm font-semibold">{{ Auth::user()->name }}</p>
                    <p class="text-xs text-gray-400 mt-0.5">{{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>
    </div>
</nav>