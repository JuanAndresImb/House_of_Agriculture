@props(['title', 'url', 'icon'])

<a href="{{ $url }}" class="bg-white rounded-lg p-6 shadow-sm hover:shadow-md transition flex flex-col items-center">
  <img src="{{ $icon }}" alt="{{ $title }}" class="h-16 mb-4">
  <h3 class="font-sourcecode text-xl text-hoa-green mb-2">{{ $title }}</h3>
  <p class="text-gray-600 text-sm">{{ $slot }}</p>
</a>
