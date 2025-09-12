@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li class="w-full p-5 mt-8 bg-red-200 bg-opacity-80 rounded-xl">{{ $message }}</li>
        @endforeach
    </ul>
@endif
