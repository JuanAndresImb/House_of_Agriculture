<x-hoa-layout>
  {{-- Header principal --}}
  <header class="text-center mb-8">
    <h1 class="font-diazo text-4xl text-hoa-green mb-2">Actualités du secteur</h1>
    <p class="text-gray-600 max-w-2xl mx-auto">
      Retrouvez ici les dernières nouvelles concernant l’agroécologie et les initiatives de HoA.
    </p>
  </header>

  {{-- Barre de recherche --}}
  <div class="max-w-xl mx-auto mb-12">
    <form method="GET" action="{{ route('s-informer.actualites') }}" class="relative">
      <input type="search" name="q"
             class="w-full border border-gray-300 rounded-full py-2 pl-4 pr-10 focus:outline-none focus:ring-2 focus:ring-hoa-green"
             placeholder="Rechercher une actualité..." value="{{ request('q') }}">
      <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-hoa-green">
        <x-heroicon-o-magnifying-glass class="w-5 h-5"/>
      </button>
    </form>
  </div>

  {{-- Listing des actualités --}}
  <section class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($actualites as $news)
      <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition">
        <img src="{{ $news->image_url ?? asset('images/default-news.jpg') }}" alt="{{ $news->title }}" class="h-48 w-full object-cover">
        <div class="p-4">
          <h3 class="font-sourcecode text-xl text-gray-800 mb-2">{{ $news->title }}</h3>
          <p class="text-gray-600 text-sm">{{ Str::limit($news->excerpt, 100) }}</p>
          <a href="#" class="inline-block text-hoa-green font-semibold hover:underline mt-3">
            Lire l'article →
          </a>
        </div>
      </div>
    @endforeach
  </section>

  {{-- Pagination --}}
  <div class="mt-12 flex justify-center">
    {{ $actualites->links() }}
  </div>

  {{-- Navigation bas de page --}}
  <div class="mt-16 flex justify-between text-hoa-yellow text-lg font-semibold">
    <a href="{{ route('s-informer') }}" class="hover:underline">&laquo; Retour à S’informer</a>
    <a href="{{ route('contact') }}" class="hover:underline">Aide / Contact &raquo;</a>
  </div>
</x-hoa-layout>
