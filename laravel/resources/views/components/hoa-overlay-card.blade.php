@props(['title', 'image', 'url'])

<a href="{{ $url }}" class="relative block w-full h-[300px] rounded-lg overflow-hidden group">
    
    <div class="absolute inset-0">
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover">

        <div class="absolute inset-0 bg-[#a0601a]/20 group-hover:bg-[#a0601a]/40 transition duration-300"></div>
        </div>

    <div class="relative z-10 h-full flex flex-col justify-center items-center text-white text-center px-4">
        <span class="text-2xl font-bold mb-1">✽</span>
        <h3 class="text-xl md:text-2xl font-extrabold">{{ $title }}</h3>
    </div>
</a>
