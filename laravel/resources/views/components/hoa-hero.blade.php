@props(['imageUrl'])

<div class="relative w-full h-screen bg-cover bg-center" style="background-image: url('{{ $imageUrl }}')">
    {{-- Overlay brun --}}
    <div class="absolute inset-0 bg-[#a0601a]/30"></div>

    {{-- Contenu centré --}}
    <div class="relative z-10 h-full flex flex-col justify-center items-center text-white text-center px-4">
        {{ $slot }}
    </div>
</div>
