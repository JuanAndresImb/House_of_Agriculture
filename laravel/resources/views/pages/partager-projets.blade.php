{{-- resources/views/pages/partager-projets.blade.php --}}
<x-hoa-layout>
  <header class="mb-8 text-center">
    <h1 class="font-diazo text-4xl text-hoa-green mb-2">Projets et innovations HoA</h1>
    <p class="text-gray-700">Initiatives internes accessibles aux membres.</p>
  </header>

  <nav class="flex justify-center space-x-6 mb-12">
    <a href="{{ route('partager.retex') }}"
       class="text-gray-600 hover:text-hoa-green">RETEX</a>
    <a href="{{ route('partager.portraits') }}"
       class="text-gray-600 hover:text-hoa-green">Portraits de fermes</a>
    <a href="{{ route('partager.projets') }}"
       class="pb-1 font-semibold border-b-2 border-hoa-green">Projets HoA</a>
  </nav>

  @auth
    <section class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach($projects as $project)
        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
          <div class="p-4">
            <h2 class="font-sourcecode text-xl mb-2">{{ $project->title }}</h2>
            <p class="text-gray-600 mb-4">{{ Str::limit($project->excerpt, 120) }}</p>
            <a href="{{ route('project.show', $project) }}"
               class="text-hoa-green font-semibold hover:underline">
              Voir plus →
            </a>
          </div>
        </div>
      @endforeach
    </section>

    <div class="mt-12 flex justify-center">
      {{ $projects->links() }}
    </div>
  @else
    <div class="text-center py-16">
      <p class="mb-6 text-gray-700">
        Cette section est réservée aux membres HoA. Identifiez‑vous ou
        <a href="{{ route('register') }}"
           class="text-hoa-green font-semibold hover:underline">adhérez</a>
        pour accéder aux projets.
      </p>
    </div>
  @endauth

  <div class="mt-16 flex justify-between text-hoa-yellow text-lg font-semibold">
    <a href="{{ route('partager') }}"    class="hover:underline">&laquo; Partager</a>
    <a href="{{ route('s-informer') }}" class="hover:underline">S’informer &raquo;</a>
  </div>
</x-hoa-layout>
