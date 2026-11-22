@props(['alt' => false])

<a {{ $attributes->class([
    'p-2 px-6 rounded-full',
    'bg-black text-white hover:bg-gray-800' => ! $alt,
    'bg-gray-300 text-black hover:text-white hover:bg-gray-600' => $alt,
]) }}>
    {{ $slot }}
</a>