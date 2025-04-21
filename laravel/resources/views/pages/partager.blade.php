{{-- resources/views/pages/partager.blade.php --}}
<x-hoa-layout>
  {{-- 1. En‑tête --}}
  <header class="text-center mb-12">
    <h1 class="font-diazo text-4xl text-hoa-green mb-2">Partager</h1>
    <p class="text-gray-700">
      L’agroécologie se construit <strong>collectivement</strong> : chaque expérience compte...
    </p>
  </header>

  {{-- 2. Cartes vers les sous‑onglets --}}
  <section class="grid sm:grid-cols-3 lg:grid-cols-4 gap-6 mb-16">
    @foreach([
      ['route'=>'partager.retex',     'title'=>'Retours d’expérience',     'img'=>'retex-card.png'],
      ['route'=>'partager.portraits', 'title'=>'Portraits de fermes',      'img'=>'fermes-card.png'],
      ['route'=>'partager.projets',   'title'=>'Projets HoA',              'img'=>'projets-card.png'],
    ] as $tab)
      <a href="{{ route($tab['route']) }}"
         class="block bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition">
        <div class="bg-gray-200 h-40 flex items-center justify-center">
          <img src="{{ asset('images/'.$tab['img']) }}"
               alt="{{ $tab['title'] }}" class="h-20">
        </div>
        <div class="p-4 text-center">
          <h2 class="font-sourcecode text-xl text-gray-800">{{ $tab['title'] }}</h2>
        </div>
      </a>
    @endforeach
  </section>

  {{-- 3. Navigation bas de page --}}
  <div class="flex justify-between text-hoa-yellow text-lg font-semibold">
    <a href="{{ route('home') }}"      class="hover:underline">&laquo; Accueil</a>
    <a href="{{ route('apprendre') }}" class="hover:underline">Apprendre &raquo;</a>
  </div>
</x-hoa-layout>
