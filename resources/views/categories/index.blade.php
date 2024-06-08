
<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="py-2 md:py-4">
        <div class="w-full mx-auto sm:px-2 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="p-6 text-gray-900 text-3xl font-bold">
                    {{ __('Categories') }}
                </h2>
            </div>

            <div class="flex flex-col md:flex-row gap-4 mt-4 justify-between align-center">
                <div class="w-full h-max md:w-1/3 bg-white shadow-sm sm:rounded-lg">
                    <div class="px-5 py-6">
                        <h3 class="text-left text-xl font-medium">
                            {{ __('Add new category') }}
                        </h3>
                        <form action="" method="post">
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
                                    <input name="active_cat" id="active_cat" type="checkbox" class="sr-only peer" />
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

                <div class="overflow-x-auto h-max w-full md:w-2/3 shadow-sm sm:rounded-lg">
                    <table class="min-w-full bg-white">
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
                            <tr class="even:bg-blue-50">
                                <td class="p-4 text-sm text-black">
                                    John Doe
                                </td>
                                <td class="p-4 text-sm text-black">
                                    john-doe
                                </td>
                                <td class="p-4 text-sm text-black">
                                    Active
                                    <span class="h-3 w-3 ml-1 rounded-full border border-white bg-green-500 inline-block"></span>
                                </td>
                                <td class="p-4 text-sm text-black">
                                    2022-05-15
                                </td>
                                <td class="p-4 text-sm text-black">
                                    2022-05-15
                                </td>
                                <td class="p-4">
                                    <button class="mr-4" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-500 hover:fill-blue-700" viewBox="0 0 348.882 348.882">
                                            <path
                                                d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                                                data-original="#000000"
                                            />
                                            <path
                                                d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                                                data-original="#000000"
                                            />
                                        </svg>
                                    </button>
                                    <button class="mr-4" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 hover:fill-red-700" viewBox="0 0 24 24">
                                            <path
                                                d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                                data-original="#000000"
                                            />
                                            <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z" data-original="#000000" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <tr class="even:bg-blue-50">
                                <td class="p-4 text-sm text-black">
                                    John Doe
                                </td>
                                <td class="p-4 text-sm text-black">
                                    john-doe
                                </td>
                                <td class="p-4 text-sm text-black">
                                    In-Active
                                </td>
                                <td class="p-4 text-sm text-black">
                                    2022-05-15
                                </td>
                                <td class="p-4 text-sm text-black">
                                    2022-05-15
                                </td>
                                <td class="p-4">
                                    <button class="mr-4" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-500 hover:fill-blue-700" viewBox="0 0 348.882 348.882">
                                            <path
                                                d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                                                data-original="#000000"
                                            />
                                            <path
                                                d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                                                data-original="#000000"
                                            />
                                        </svg>
                                    </button>
                                    <button class="mr-4" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 hover:fill-red-700" viewBox="0 0 24 24">
                                            <path
                                                d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                                data-original="#000000"
                                            />
                                            <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z" data-original="#000000" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <tr class="even:bg-blue-50">
                                <td class="p-4 text-sm text-black">
                                    John Doe
                                </td>
                                <td class="p-4 text-sm text-black">
                                    john-doe
                                </td>
                                <td class="p-4 text-sm text-black">
                                    In-Active
                                </td>
                                <td class="p-4 text-sm text-black">
                                    2022-05-15
                                </td>
                                <td class="p-4 text-sm text-black">
                                    2022-05-15
                                </td>
                                <td class="p-4">
                                    <button class="mr-4" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-500 hover:fill-blue-700" viewBox="0 0 348.882 348.882">
                                            <path
                                                d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                                                data-original="#000000"
                                            />
                                            <path
                                                d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                                                data-original="#000000"
                                            />
                                        </svg>
                                    </button>
                                    <button class="mr-4" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 hover:fill-red-700" viewBox="0 0 24 24">
                                            <path
                                                d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                                data-original="#000000"
                                            />
                                            <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z" data-original="#000000" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <tr class="even:bg-blue-50">
                                <td class="p-4 text-sm text-black">
                                    John Doe
                                </td>
                                <td class="p-4 text-sm text-black">
                                    john-doe
                                </td>
                                <td class="p-4 text-sm text-black">
                                    Active
                                </td>
                                <td class="p-4 text-sm text-black">
                                    2022-05-15
                                </td>
                                <td class="p-4 text-sm text-black">
                                    2022-05-15
                                </td>
                                <td class="p-4">
                                    <button class="mr-4" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-500 hover:fill-blue-700" viewBox="0 0 348.882 348.882">
                                            <path
                                                d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                                                data-original="#000000"
                                            />
                                            <path
                                                d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                                                data-original="#000000"
                                            />
                                        </svg>
                                    </button>
                                    <button class="mr-4" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 hover:fill-red-700" viewBox="0 0 24 24">
                                            <path
                                                d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                                data-original="#000000"
                                            />
                                            <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z" data-original="#000000" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <tr class="even:bg-blue-50">
                                <td class="p-4 text-sm text-black">
                                    John Doe
                                </td>
                                <td class="p-4 text-sm text-black">
                                    john-doe
                                </td>
                                <td class="p-4 text-sm text-black">
                                    In-Active
                                </td>
                                <td class="p-4 text-sm text-black">
                                    2022-05-15
                                </td>
                                <td class="p-4 text-sm text-black">
                                    2022-05-15
                                </td>
                                <td class="p-4">
                                    <button class="mr-4" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-500 hover:fill-blue-700" viewBox="0 0 348.882 348.882">
                                            <path
                                                d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                                                data-original="#000000"
                                            />
                                            <path
                                                d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                                                data-original="#000000"
                                            />
                                        </svg>
                                    </button>
                                    <button class="mr-4" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 hover:fill-red-700" viewBox="0 0 24 24">
                                            <path
                                                d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                                data-original="#000000"
                                            />
                                            <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z" data-original="#000000" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>