
<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="py-2 md:py-4">
        <div class="relative w-full mx-auto sm:px-2 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="p-6 text-gray-900 text-3xl font-semibold">
                    {{ __('Create Post') }}
                </h2>
            </div>

            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col md:flex-row gap-4 mt-4 justify-between align-center">
                @csrf
                <div class="overflow-x-auto h-max w-full md:w-2/3 sm:rounded-lg">
                    <div class="mx-auto max-w-6xl shadow-lg py-8 px-6 relative bg-white rounded">
                        <div class="mt-4">
                            <input name="title" id="title" type="text" class="w-full text-sm px-4 py-3 rounded outline-none border-2 border-gray-200 focus:border-blue-500"
                                required placeholder="Enter post title" />
                        </div>
                        <div class="mt-4">
                            <textarea name="body" id="editor" class="w-full h-40 text-sm px-4 py-3 rounded outline-none border-2 border-gray-200 focus:border-blue-500"></textarea>
                        </div>
                        <div class="mt-2">
                            <label class="text-gray-500 text-sm font-medium mb-1 block">Upload file</label>
                            <input type="file"
                                class="w-full text-gray-400 font-medium text-sm bg-white border file:cursor-pointer cursor-pointer file:border-0 file:py-3 file:px-4 file:mr-4 file:bg-gray-100 file:hover:bg-gray-200 file:text-gray-500 rounded" />
                            <p class="text-xs text-gray-400 mt-2">PNG, JPG and WEBP are Allowed.</p>
                        </div>
                        <div class="!mt-7">
                            <button type="submit"
                                class="w-full py-2.5 px-4 text-sm rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                                {{ __('Publish Post') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
