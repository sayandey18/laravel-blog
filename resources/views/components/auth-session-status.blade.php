@props(['status'])

@if ($status)
    <div class="max-width-md flex items-center justify-center my-2">
        <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
            {{ $status }}
        </div>
    </div>
@endif
