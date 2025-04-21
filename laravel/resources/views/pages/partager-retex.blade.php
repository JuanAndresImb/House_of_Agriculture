{{-- resources/views/pages/partager-retex.blade.php --}}
<x-hoa-layout>
  {{-- Header & Fil d’ariane / Breadcrumb --}}
  <header class="mb-8 text-center">
    <h1 class="font-diazo text-4xl text-hoa-green mb-2">Retours d’expérience</h1>
    <p class="text-gray-700">Découvrez des retours concrets issus du terrain…</p>
  </header>

  {{-- Onglets --}}
  <nav class="flex justify-center space-x-6 mb-12">
    <a href="{{ route('partager.retex') }}"
       class="pb-1 font-semibold border-b-2 border-hoa-green">RETEX</a>
    <a href="{{ route('partager.portraits') }}"
       class="text-gray-600 hover:text-hoa-green">Portraits de fermes</a>
    <a href="{{ route('partager.projets') }}"
       class="text-gray-600 hover:text-hoa-green">Projets HoA</a>
  </nav>

  {{-- Recherche --}}
  <div class="max-w-md mx-auto mb-12">
    <form action="" method="GET" class="relative">
      <input type="search" name="q"
             class="w-full border border-gray-300 rounded-full py-2 pl-4 pr-10 focus:outline-none focus:ring-2 focus:ring-hoa-green"
             placeholder="Rechercher un retour d'expérience">
      <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500">
        <x-heroicon-o-magnifying-glass class="w-5 h-5"/>
      </button>
    </form>
  </div>

  {{-- Listing RETEX --}}
  <section class="space-y-12">
    @foreach($retexes as $retex)
      <div class="md:flex md:items-center md:justify-between">
        <div class="md:w-1/2 space-y-3">
          <h2 class="font-sourcecode text-2xl">{{ $retex->title }}</h2>
          <p class="text-gray-600">{{ Str::limit($retex->excerpt, 200) }}</p>
          <a href="{{ route('retex.show', $retex) }}"
             class="inline-flex items-center text-hoa-green font-semibold hover:underline">
            Voir plus <x-heroicon-o-arrow-small-right class="w-4 h-4 ml-1"/>
          </a>
        </div>
        <div class="md:w-1/2 mt-6 md:mt-0">
          <img src="{{ $retex->image_url ?? asset('images/retex-placeholder.png') }}"
               alt="{{ $retex->title }}" class="w-full rounded-lg shadow-sm">
        </div>
      </div>
    @endforeach
  </section>

  {{-- Pagination --}}
  <div class="mt-12 flex justify-center">
    {{ $retexes->links() }}
  </div>

  {{-- Navigation bas de page --}}
  <div class="mt-16 flex justify-between text-hoa-yellow text-lg font-semibold">
    <a href="{{ route('partager') }}"        class="hover:underline">&laquo; Partager</a>
    <a href="{{ route('s-informer') }}"     class="hover:underline">S’informer &raquo;</a>
  </div>
</x-hoa-layout>
