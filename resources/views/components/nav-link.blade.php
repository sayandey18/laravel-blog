@props(['active'])

@php
$classes = ($active ?? false)
    ? 'text-sm flex items-center text-blue-600 transition-all'
    : 'text-sm flex items-center text-gray-500 hover:text-blue-600 transition-all';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
