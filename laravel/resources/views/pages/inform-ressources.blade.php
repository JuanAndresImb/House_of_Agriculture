<x-hoa-layout>
  {{-- Header principal --}}
  <header class="text-center mb-8">
    <h1 class="font-diazo text-4xl text-hoa-green">Ressources internes HoA</h1>
    <p class="text-gray-600 max-w-xl mx-auto">
      Cet espace est réservé aux membres pour consulter les documents internes.
    </p>
  </header>

  {{-- Gestion accès invité vs membre --}}
  @guest
    {{-- Bloc visible uniquement pour les invités --}}
    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-6 mb-8 text-center rounded">
      <p>Cette section est réservée aux membres. Veuillez vous connecter pour y accéder.</p>
      <div class="mt-4 flex justify-center space-x-4">
        <a href="{{ route('login') }}" class="bg-hoa-yellow text-white px-4 py-2 rounded hover:bg-yellow-600">Se connecter</a>
        <a href="{{ route('register') }}" class="text-hoa-green font-semibold hover:underline">Devenir membre</a>
      </div>
    </div>
  @else
    {{-- Bloc visible uniquement pour les membres authentifiés --}}
    
    {{-- Filtres + Recherche --}}
    <div class="flex flex-wrap justify-between items-center gap-4 mb-8">
      <div class="flex flex-wrap gap-2">
        <select class="border rounded px-3 py-1">
          <option>Format</option>
        </select>
        <select class="border rounded px-3 py-1">
          <option>Type</option>
        </select>
        <select class="border rounded px-3 py-1">
          <option>Genre</option>
        </select>
      </div>

      <form method="GET" class="relative">
        <input type="search" name="q" placeholder="Recherche"
               class="border border-gray-300 rounded-full py-2 pl-4 pr-10 focus:outline-none focus:ring-2 focus:ring-hoa-green">
        <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-hoa-green">
          <x-heroicon-o-magnifying-glass class="w-5 h-5"/>
        </button>
      </form>
    </div>

    {{-- Liste des documents --}}
    <section class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach($documents as $doc)
        <div class="bg-white p-4 rounded-lg shadow-sm">
          <img src="{{ $doc->image_url }}" alt="" class="h-40 w-full object-cover rounded mb-3">
          <h3 class="font-sourcecode text-lg text-gray-800 mb-1">{{ $doc->title }}</h3>
          <p class="text-sm text-gray-600 mb-2">{{ Str::limit($doc->excerpt, 80) }}</p>
          <div class="flex justify-between items-center">
            <a href="{{ $doc->file_url }}" target="_blank" class="text-hoa-green text-sm font-semibold hover:underline">Télécharger</a>
            <div class="flex space-x-2">
              <button><x-heroicon-o-heart class="w-5 h-5"/></button>
              <button><x-heroicon-o-plus class="w-5 h-5"/></button>
            </div>
          </div>
        </div>
      @endforeach
    </section>

    {{-- Pagination (si tu as paginé les documents) --}}
    <div class="mt-12 flex justify-center">
      {{ $documents->links() }}
    </div>

  @endguest

  {{-- Navigation bas de page --}}
  <div class="mt-16 flex justify-between text-hoa-yellow text-lg font-semibold">
    <a href="{{ route('s-informer') }}" class="hover:underline">&laquo; Retour à S’informer</a>
    <a href="{{ route('contact') }}" class="hover:underline">Aide / Contact &raquo;</a>
  </div>
</x-hoa-layout>
