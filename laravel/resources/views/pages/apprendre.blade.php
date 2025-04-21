{{-- resources/views/pages/apprendre.blade.php --}}
<x-hoa-layout>
  {{-- 1. En‑tête de page --}}
  <header class="mb-12 text-center">
    <h1 class="font-diazo text-4xl text-hoa-green mb-2">Apprendre</h1>
    <p class="text-gray-700">E‑learning &amp; événements</p>
  </header>

  {{-- 2. Grille 2 colonnes : E‑Learning | visuel --}}
  <section class="grid md:grid-cols-2 gap-8 mb-16">
    <div class="flex flex-col justify-between bg-white p-8 rounded-lg shadow-sm">
      <h2 class="font-sourcecode text-2xl mb-4">E‑Learning</h2>
      <p class="text-gray-600 mb-6">
        Plongez au cœur de l’agroécologie avec nos ressources en ligne et nos webinaires.
      </p>
      <a href="{{ route('apprendre.elearning') }}"
         class="inline-block bg-hoa-yellow text-white px-4 py-2 rounded hover:bg-yellow-500 font-semibold">
        En savoir plus
      </a>
    </div>
    <div class="bg-gray-200 rounded-lg overflow-hidden flex items-center justify-center">
      <img src="{{ asset('images/apprendre-elearning.png') }}"
           alt="E‑learning Agroécologie" class="w-3/4">
    </div>
  </section>

  {{-- 3. Grille inversée : visuel | Formations terrain --}}
  <section class="grid md:grid-cols-2 gap-8 mb-16">
    <div class="bg-gray-200 rounded-lg overflow-hidden flex items-center justify-center">
      <img src="{{ asset('images/apprendre-formation.png') }}"
           alt="Formations sur le terrain" class="w-3/4">
    </div>
    <div class="flex flex-col justify-between bg-white p-8 rounded-lg shadow-sm">
      <h2 class="font-sourcecode text-2xl mb-4">Nos formations HoA</h2>
      <p class="text-gray-600 mb-6">
        Stages, ateliers participatifs et formations certifiantes près de chez vous.
      </p>
      <a href="{{ route('apprendre.formations') }}"
         class="inline-block bg-hoa-yellow text-white px-4 py-2 rounded hover:bg-yellow-500 font-semibold">
        En savoir plus
      </a>
    </div>
  </section>

  {{-- 4. Navigation bas de page --}}
  <div class="flex justify-between text-hoa-yellow text-lg font-semibold">
    <a href="{{ route('partager') }}" class="hover:underline">&laquo; Partager</a>
    <a href="{{ route('s-informer') }}" class="hover:underline">S’informer &raquo;</a>
  </div>
</x-hoa-layout>
