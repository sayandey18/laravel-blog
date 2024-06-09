@props(['status', 'message', 'description'])

<div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2500)"
     class="bg-white absolute mt-3 top-0 right-4 -translate-y-3">
    <div class="shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] text-black flex w-max max-w-sm rounded overflow-hidden" role="alert">
        <div class="flex items-center px-4 bg-{{ $status === 'success' ? 'green' : 'red' }}-500">
            @if ($status === 'success')
                <x-tabler-circle-check-filled class="w-6 h-6 text-white inline" />
            @else
                <x-tabler-circle-x-filled class="w-6 h-6 text-white inline" />
            @endif
        </div>
        <div class="py-2 sm:inline text-sm font-semibold mx-4">
            <p class="text-gray-600">{{ $message }}</p>
            <p class="text-xs font-normal text-gray-400">{{ $description }}</p>
        </div>
    </div>
</div>
