{{-- resources/views/home.blade.php --}}
<x-hoa-layout>
  {{-- 1. HERO --}}
  <section class="bg-gray-200 rounded-lg overflow-hidden mb-12">
    <div class="md:flex">
      <div class="md:w-1/2 p-8">
        <h1 class="font-diazo text-4xl text-hoa-green mb-4">
          Engager tous les acteurs vers la transition agroécologique
        </h1>
        <p class="mb-6">
          <strong>The House of Agroecology</strong> est un mouvement collectif, inclusif...
        </p>
        <a href="#espaces" class="inline-block bg-hoa-yellow text-white px-5 py-3 rounded font-semibold hover:bg-yellow-500">
          Découvrir
        </a>
      </div>
      <div class="md:w-1/2 bg-gray-300 flex items-center justify-center">
        <img src="{{ asset('images/hero-placeholder.png') }}" alt="Illustration transition" class="w-3/4">
      </div>
    </div>
  </section>

  {{-- 2. SECTION HOA (diagramme + texte) --}}
  <section class="mb-12 grid md:grid-cols-2 gap-8 items-center">
    <div class="flex justify-center">
      <img src="{{ asset('images/diagramme-hoa.png') }}" alt="Diagramme HoA" class="max-w-sm">
    </div>
    <div>
      <h2 class="font-diazo text-3xl text-hoa-green mb-4">HoA</h2>
      <p class="mb-4">Quea tibi placent quicunq prosunt... (ton texte sur HoA)</p>
      <p>Chaque acteur a un rôle à jouer...</p>
    </div>
  </section>

  {{-- 3. NOS ESPACES CLÉS --}}
  <section id="espaces" class="mb-12">
    <h2 class="font-diazo text-3xl text-center text-hoa-green mb-8">Nos espaces clés</h2>
    <div class="grid md:grid-cols-3 gap-6">
  @foreach([
    [
      'title' => 'Apprendre',
      'image' => 'images/espaces/apprendre.png',
      'text'  => 'Un espace dédié à la formation et à l’éducation autour de l’agroécologie...',
      'route' => 'apprendre'
    ],
    [
      'title' => 'S’informer',
      'image' => 'images/espaces/s-informer.png',
      'text'  => 'Un espace pour suivre l’actualité et les évolutions du secteur agroécologique...',
      'route' => 's-informer'
    ],
    [
      'title' => 'Partager',
      'image' => 'images/espaces/partager.png',
      'text'  => 'Un espace pour échanger et valoriser les expériences...',
      'route' => 'partager'
    ],
  ] as $space)
    <div class="bg-white p-6 rounded-lg shadow-sm text-center">
      <img src="{{ asset($space['image']) }}"
           alt="{{ $space['title'] }}"
           class="w-full h-13 object-cover rounded mb-4">
      <h3 class="font-sourcecode text-xl mb-2">{{ $space['title'] }}</h3>
      <p class="text-gray-700">{{ $space['text'] }}</p>
      <a href="{{ route($space['route']) }}"
         class="inline-block mt-4 text-hoa-green font-semibold hover:underline">
        En savoir plus →
      </a>
    </div>
  @endforeach
</div>

  </section>

  {{-- 4. TÉMOIGNAGE --}}
  <section class="mb-12 bg-white p-8 rounded-lg shadow-sm">
    <blockquote class="italic text-gray-800">
      “Grâce à House of Agroecology, j’ai pu rencontrer d’autres agriculteurs pionniers...”
    </blockquote>
    <p class="mt-4 text-right font-semibold">– Un membre de HoA</p>
  </section>

  {{-- 5. BLOC REJOINDRE --}}
  <div class="text-center mb-12">
    <a href="{{ route('register') }}"
       class="bg-hoa-green text-white px-6 py-3 rounded font-semibold hover:bg-green-600">
      Rejoignez le mouvement !
    </a>
  </div>

  {{-- 6. SLIDER PROJETS / PORTRAITS --}}
  <section class="mb-12">
    <h2 class="font-diazo text-3xl text-center text-hoa-green mb-6">Nos initiatives</h2>
    <div class="relative">
      <div class="flex overflow-x-auto space-x-4 px-2">
        @foreach([
          ['title'=>'Nos différents projets',   'img'=>'projets.png',  'link'=>route('projects')],
          ['title'=>'Portraits des fermes',      'img'=>'fermes.png',   'link'=>route('farms')],
        ] as $card)
          <a href="{{ $card['link'] }}"
             class="min-w-[300px] bg-gray-200 rounded-lg p-6 flex-shrink-0 hover:shadow-md">
            <img src="{{ asset('images/'.$card['img']) }}" alt="" class="mb-4 rounded">
            <h3 class="font-sourcecode text-xl text-center">{{ $card['title'] }}</h3>
          </a>
        @endforeach
      </div>
      {{-- Flèches --}}
      <button class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow">
        <x-heroicon-o-chevron-left class="w-5 h-5"/>
      </button>
      <button class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow">
        <x-heroicon-o-chevron-right class="w-5 h-5"/>
      </button>
    </div>
  </section>

  {{-- 7. LOGOS PARTENAIRES --}}
  <section class="mb-12">
    <h2 class="font-diazo text-2xl text-center text-gray-600 mb-6">Avec le soutien de</h2>
    <div class="flex items-center justify-center space-x-6">
      @foreach(['logo1.png','logo2.png','logo3.png','logo4.png','logo5.png'] as $logo)
        <img src="{{ asset('partners/'.$logo) }}" alt="Partenaire" class="h-12 opacity-80 hover:opacity-100">
      @endforeach
    </div>
  </section>

  {{-- 8. NAVIGATION BAS DE PAGE --}}
  <div class="flex justify-between text-hoa-yellow text-lg font-semibold">
    <a href="{{ route('contact') }}" class="hover:underline">&laquo; Aide / Contact</a>
    <a href="{{ route('partager') }}" class="hover:underline">Partager &raquo;</a>
  </div>

</x-hoa-layout>
