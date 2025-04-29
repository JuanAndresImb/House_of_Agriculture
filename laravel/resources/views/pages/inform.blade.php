<x-hoa-layout>
  {{-- Header principal --}}
  <header class="text-center mb-12">
    <h1 class="font-diazo text-4xl text-hoa-green mb-2">S’informer</h1>
    <p class="text-gray-700 max-w-2xl mx-auto">
      Suivez l’actualité et accédez aux ressources internes de HoA. Certaines informations sont réservées aux membres.
    </p>
  </header>

  {{-- Navigation vers sous-sections --}}
  <section class="grid sm:grid-cols-2 gap-8 mb-16 max-w-4xl mx-auto">
    <a href="{{ route('s-informer.actualites') }}"
       class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition">
      <h2 class="font-sourcecode text-xl text-hoa-green mb-2">Actualités</h2>
      <p class="text-gray-600">Découvrez les dernières nouvelles du secteur agroécologique et les mises à jour du projet HoA.</p>
    </a>
    <a href="{{ route('s-informer.ressources') }}"
       class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition">
      <h2 class="font-sourcecode text-xl text-hoa-green mb-2">Ressources membres</h2>
      <p class="text-gray-600">Accédez à la documentation interne et aux archives réservées aux membres de HoA.</p>
    </a>
  </section>

  {{-- Navigation bas de page --}}
  <div class="flex justify-between text-hoa-yellow text-lg font-semibold">
    <a href="{{ route('apprendre') }}" class="hover:underline">&laquo; Apprendre</a>
    <a href="{{ route('contact') }}" class="hover:underline">Aide / Contact &raquo;</a>
  </div>
</x-hoa-layout>
