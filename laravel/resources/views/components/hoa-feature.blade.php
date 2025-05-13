@props(['title', 'text', 'image', 'url', 'reverse' => false])

@php
  $imageOrder = $reverse ? 'order-2' : 'order-1';
  $textOrder  = $reverse ? 'order-1' : 'order-2';
@endphp

<div class="grid md:grid-cols-2 gap-8 items-center py-12">
    
    {{-- Image --}}
    <div class="{{ $imageOrder }}">
        <img src="{{ $image }}" alt="{{ $title }}" class="rounded-lg w-full object-cover h-72 md:h-full">
    </div>

    {{-- Texte + bouton --}}
    <div class="{{ $textOrder }}">
        <h3 class="text-2xl font-extrabold text-gray-900 mb-4">{{ $title }}</h3>
        <p class="text-gray-700 mb-6 leading-relaxed">
            {{ $text }}
        </p>
        <a href="{{ $url }}"
           class="inline-block bg-black text-white px-6 py-2 rounded-full font-semibold hover:bg-gray-800 transition">
            En savoir plus
        </a>
    </div>
</div>
