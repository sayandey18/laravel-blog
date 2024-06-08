@props(['messages'])

@if ($messages)
    <span {{ $attributes->merge(['class' => 'inline-block text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            {{ $message }}
        @endforeach
    </span>
@endif
