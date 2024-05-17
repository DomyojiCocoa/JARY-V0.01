@props(['active'])

@php
$classes = ($active ?? false)
            ? '  inline-flex items-center px-1 pt-1 border-b-2 border-red-500 text-sm font-medium leading-5 text-red-500 focus:outline-none focus:border-red-500 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-yellow-500 hover:border-yellow-500 focus:outline-none focus:text-gray-700 focus:border-yellow-500 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
