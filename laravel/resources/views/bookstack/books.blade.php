<x-hoa-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ $headerTitle ?? 'Livres BookStack' }}
        </h2>
    </x-slot>

    <div class="py-10 max-w-4xl mx-auto sm:px-6 lg:px-8">
        {{-- Barra de navegación de BookStack --}}
        @include('bookstack._nav')

        @foreach ($books as $book)
            <div class="bg-white shadow p-4 mb-4 rounded">
                <h3 class="text-lg font-bold">{{ $book['name'] }}</h3>
                <p class="text-gray-600">{{ $book['description'] ?? 'Pas de description' }}</p>
            </div>
        @endforeach
    </div>
</x-hoa-layout>
{{-- resources/views/home.blade.php --}}
