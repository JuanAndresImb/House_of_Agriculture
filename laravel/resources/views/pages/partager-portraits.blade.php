{{-- resources/views/pages/partager-portraits.blade.php --}}
<x-hoa-layout>
  <header class="mb-8 text-center">
    <h1 class="font-diazo text-4xl text-hoa-green mb-2">Portraits de fermes</h1>
    <p class="text-gray-700">Plongez dans l’univers de fermes pionnières…</p>
  </header>

  <nav class="flex justify-center space-x-6 mb-12">
    <a href="{{ route('partager.retex') }}"
       class="text-gray-600 hover:text-hoa-green">RETEX</a>
    <a href="{{ route('partager.portraits') }}"
       class="pb-1 font-semibold border-b-2 border-hoa-green">Portraits de fermes</a>
    <a href="{{ route('partager.projets') }}"
       class="text-gray-600 hover:text-hoa-green">Projets HoA</a>
  </nav>

  <section class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($farms as $farm)
      <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        <img src="{{ $farm->image_url ?? asset('images/farm-placeholder.png') }}"
             alt="{{ $farm->name }}" class="h-48 w-full object-cover">
        <div class="p-4">
          <h2 class="font-sourcecode text-xl mb-2">{{ $farm->name }}</h2>
          <p class="text-gray-600 mb-4">{{ Str::limit($farm->excerpt, 100) }}</p>
          {{-- Exemple d’étoiles --}}
          <div class="flex items-center mb-3">
            @for($i=0; $i<5; $i++)
              <svg class="w-5 h-5 {{ $i < $farm->rating ? 'text-hoa-green' : 'text-gray-300'}}" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.963a1
                ..."/>
              </svg>
            @endfor
          </div>
          <a href="{{ route('farm.show', $farm) }}"
             class="text-hoa-green font-semibold hover:underline">
            Voir plus →
          </a>
        </div>
      </div>
    @endforeach
  </section>

  <div class="mt-12 flex justify-center">
    {{ $farms->links() }}
  </div>

  <div class="mt-16 flex justify-between text-hoa-yellow text-lg font-semibold">
    <a href="{{ route('partager') }}"    class="hover:underline">&laquo; Partager</a>
    <a href="{{ route('s-informer') }}" class="hover:underline">S’informer &raquo;</a>
  </div>
</x-hoa-layout>
