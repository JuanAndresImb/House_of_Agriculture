<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl">{{ $headerTitle }}</h2>
  </x-slot>

  <div class="py-6 max-w-3xl mx-auto">
    @include('bookstack._nav')

    <div class="bg-white shadow p-6 rounded">
      <h3 class="text-2xl font-bold mb-4">{{ $page['name'] }}</h3>
      <div class="prose">
        {!! $page['html'] !!}
      </div>
    </div>
  </div>
</x-app-layout>
