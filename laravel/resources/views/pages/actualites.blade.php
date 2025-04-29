<x-hoa-layout>
  <header class="text-center mb-8">
    <h1 class="font-diazo text-3xl text-hoa-green">Toutes les actualités</h1>
  </header>

  <div class="max-w-xl mx-auto mb-8">
    <form method="GET" class="relative">
      <input type="search" name="q" placeholder="Recherche"
             class="w-full border border-gray-300 rounded-full py-2 pl-4 pr-10 focus:outline-none focus:ring-2 focus:ring-hoa-green">
      <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-hoa-green">
        <x-heroicon-o-magnifying-glass class="w-5 h-5"/>
      </button>
    </form>
  </div>

  {{-- Actualités listées en cartes --}}
  <section class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($actualites as $news)
      <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        <img src="{{ $news->image_url }}" alt="" class="h-48 w-full object-cover">
        <div class="p-4">
          <h3 class="font-sourcecode text-xl text-gray-800 mb-2">{{ $news->title }}</h3>
          <p class="text-gray-600 text-sm">{{ Str::limit($news->excerpt, 100) }}</p>
          <a href="#" class="text-hoa-green font-semibold hover:underline mt-2 inline-block">En savoir plus</a>
        </div>
      </div>
    @endforeach
  </section>

  <div class="mt-12 flex justify-between text-hoa-yellow text-lg font-semibold">
    <a href="{{ route('s-informer') }}" class="hover:underline">&laquo; Retour</a>
    <a href="{{ route('contact') }}" class="hover:underline">Aide / Contact &raquo;</a>
  </div>
</x-hoa-layout>
