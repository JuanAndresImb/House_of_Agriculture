@props(['url', 'variant' => 'yellow'])

@php
$classes = $variant === 'white'
    ? 'bg-white text-hoa-green hover:bg-gray-100'
    : 'bg-hoa-yellow text-white hover:bg-yellow-600';
@endphp

<a href="{{ $url }}" class="{{ $classes }} px-5 py-2 rounded font-semibold transition">
  {{ $slot }}
</a>
