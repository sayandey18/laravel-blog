
<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="py-2 md:py-4">
        <div class="relative w-full mx-auto sm:px-2 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="p-6 text-gray-900 text-3xl font-semibold">
                    {{ __('Posts') }}
                </h2>
            </div>

            <div class="overflow-x-auto h-max w-full sm:rounded-lg">
                <div class="min-w-full bg-white shadow-sm my-4 rounded">
                    <div class="py-5 px-4">
                        <a  href="{{ route('posts.create') }}"
                            class="w-full py-2.5 px-4 text-sm rounded text-white bg-gray-800 hover:bg-gray-900 focus:outline-none">
                            {{ __('Create new post') }}
                        </a>
                    </div>
                </div>

                <table class="min-w-full bg-white shadow-sm my-4 rounded">
                    <thead class="bg-gray-800 whitespace-nowrap">
                        <tr>
                            <th class="p-4 text-left text-sm font-medium text-white">
                                Name
                            </th>
                            <th class="p-4 text-left text-sm font-medium text-white">
                                Author
                            </th>
                            <th class="p-4 text-left text-sm font-medium text-white">
                                Category
                            </th>
                            <th class="p-4 text-left text-sm font-medium text-white">
                                Tags
                            </th>
                            <th class="p-4 text-left text-sm font-medium text-white">
                                Updated at
                            </th>
                            <th class="p-4 text-left text-sm font-medium text-white">
                                Actions
                            </th>
                        </tr>
                    </thead>

                    <tbody class="whitespace-nowrap">
                        @if ($posts)
                            @foreach ($posts as $post)
                                <tr class="even:bg-blue-50">
                                    <td class="p-4 text-sm text-black">
                                        {{ $post->title }}
                                    </td>
                                    <td class="p-4 text-sm text-black">
                                        {{ $post->user->name }}
                                    </td>
                                    <td class="p-4 text-sm text-black">
                                        
                                    </td>
                                    <td class="p-4 text-sm text-black">
                                        
                                    </td>
                                    <td class="p-4 text-sm text-black">
                                        {{ $post->updated_at->format('d-m-Y') }}
                                    </td>
                                    <td class="p-4 flex justify-start items-center gap-3">
                                        <a href="{{ route('posts.edit', $post->id) }}">
                                            <x-tabler-edit class="w-7 text-blue-500 hover:text-blue-700" />
                                        </a>

                                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="flex justify-center items-center">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <x-tabler-trash class="w-7 text-red-500 hover:text-red-700" />
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>

                <div class="my-3">
                    {{ $posts->links() }}
                </div>
            </div>

            <!-- Display success message -->
            @if (session('status') === 'post-deleted')
                <x-status-message status="success" message="{{ __('Deleted successfully') }}" description="{{ __('Post successfully deleted from database.') }}" />
            @endif

            <!-- Display error messages -->
            @if ($errors->any())
                <x-status-message status="error" message="{{ __('Something went wrong') }}" description="{{ __('Oops! Something went wrong, try again later.') }}" />
            @endif
        </div>
    </div>
</x-app-layout>
