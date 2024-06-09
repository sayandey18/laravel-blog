
<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="py-2 md:py-4">
        <div class="relative w-full mx-auto sm:px-2 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="p-6 text-gray-900 text-3xl font-semibold">
                    {{ __('Categories') }}
                </h2>
            </div>

            <div class="flex flex-col md:flex-row gap-4 mt-4 justify-between align-center">
                <div class="w-full h-max md:w-1/3 bg-white shadow-sm sm:rounded-lg">
                    <div class="px-5 py-6">
                        <h3 class="text-left text-xl font-medium">
                            {{ __('Add new category') }}
                        </h3>
                        <form action="{{ route('categories.store') }}" method="post">
                            @csrf
                            <div class="mt-4">
                                <input name="category" id="category" type="text" class="w-full text-sm px-4 py-3 rounded outline-none border-2 border-gray-200 focus:border-blue-500"
                                    required placeholder="Enter category name" />
                            </div>
                            <div class="mt-4">
                                <input name="category_slug" id="category_slug" type="text" class="w-full text-sm px-4 py-3 rounded outline-none text-gray-400 border-2 border-gray-200 focus:border-gray-200 focus:ring-0"
                                    required readonly placeholder="category-slug" />
                            </div>
                            <div class="flex items-center justify-between mt-4">
                                <p class="mr-4 text-sm font-medium text-gray-900 dark:text-gray-300">Activate this category</p>
                                <label class="relative cursor-pointer">
                                    <input name="active_cat" id="active_cat" type="checkbox" class="sr-only peer" value="1" checked />
                                    <div
                                        class="w-11 h-6 flex items-center bg-gray-300 rounded-full peer peer-checked:after:translate-x-full after:absolute after:left-[2px] peer-checked:after:border-white after:bg-white after:border after:border-gray-300 after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#007bff]"
                                    ></div>
                                </label>
                            </div>
                            <div class="!mt-7">
                                <button type="submit"
                                    class="w-full py-2.5 px-4 text-sm rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                                    {{ __('Add Category') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="overflow-x-auto h-max w-full md:w-2/3 sm:rounded-lg">
                    <table class="min-w-full bg-white shadow-sm">
                        <thead class="bg-gray-800 whitespace-nowrap">
                            <tr>
                                <th class="p-4 text-left text-sm font-medium text-white">
                                    Category
                                </th>
                                <th class="p-4 text-left text-sm font-medium text-white">
                                    Slug
                                </th>
                                <th class="p-4 text-left text-sm font-medium text-white">
                                    Status
                                </th>
                                <th class="p-4 text-left text-sm font-medium text-white">
                                    Created at
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
                            @if ($categories)
                                @foreach ($categories as $category)
                                    <tr class="even:bg-blue-50">
                                        <td class="p-4 text-sm text-black">
                                            {{ $category->name }}
                                        </td>
                                        <td class="p-4 text-sm text-black">
                                            {{ $category->slug }}
                                        </td>
                                        <td class="p-4 text-sm text-black">
                                            {{ $category->active ? 'Active' : 'Inactive' }}
                                            <span class="h-3 w-3 ml-1 rounded-full border border-white {{ $category->active ? 'bg-green-500' : 'bg-red-500' }} inline-block"></span>
                                        </td>
                                        <td class="p-4 text-sm text-black">
                                            {{ $category->created_at->format('d-m-Y') }}
                                        </td>
                                        <td class="p-4 text-sm text-black">
                                            {{ $category->updated_at->format('d-m-Y') }}
                                        </td>
                                        <td class="p-4 flex justify-start items-center gap-3">
                                            <form action="" method="POST">
                                                @csrf
                                                <button type="submit" title="Delete">
                                                    <x-tabler-edit class="w-7 text-blue-500 hover:text-blue-700" />
                                                </button>
                                            </form>

                                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
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
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>

            <!-- Display success message -->
            @if (session('status') === 'category-inserted')
                <x-status-message status="success" message="{{ __('Inserted successfully') }}" description="{{ __('A new category is added!') }}" />
            @endif

            @if (session('status') === 'category-deleted')
                <x-status-message status="success" message="{{ __('Deleted successfully') }}" description="{{ __('Category successfully deleted from database.') }}" />
            @endif

            <!-- Display error messages -->
            @if ($errors->any())
                <x-status-message status="error" message="{{ __('Something went wrong') }}" description="{{ __('Oops! Something went wrong, try again later.') }}" />
            @endif
        </div>
    </div>
</x-app-layout>
