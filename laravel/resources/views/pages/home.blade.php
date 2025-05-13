@php
  $imgs = [
    'images/leader/1.jpg','images/leader/2.jpg','images/leader/3.jpg',
    'images/leader/4.jpg','images/leader/5.jpg','images/leader/6.jpg',
    'images/leader/7.jpg','images/leader/8.jpg','images/leader/9.jpg',
    'images/leader/10.jpg','images/leader/11.jpg','images/leader/12.jpg',
  ];
  $chunks = array_chunk($imgs, 6);
  $slidesJson = json_encode($chunks);
@endphp

<x-hoa-layout :wide="true">

  {{-- Hero plein écran --}}
  <x-slot name="hero">
    <x-hoa-hero image-url="{{ asset('images/home/hero-home.png') }}">
      <h1 class="font-diazo text-6xl lg:text-7xl text-white drop-shadow-lg mb-4">
        Construisons ensemble l'agriculture de demain
      </h1>
      <p class="text-2xl lg:text-3xl text-white max-w-2xl mx-auto mb-6 drop-shadow">
        Découvrez comment nos membres font émerger l’agroécologie, une histoire à la fois.
      </p>
      <x-hoa-button url="{{ route('about') }}">Découvrir HoA</x-hoa-button>
    </x-hoa-hero>
  </x-slot>

  {{-- Introduction / Accueil --}}
  <section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 text-center space-y-6">
      <p class="text-gray-700 leading-relaxed">
        <em>Engager tous les acteurs vers la transition agroécologique</em> – <strong>The House of Agroecology</strong> est
        un mouvement collectif, inclusif et neutre qui agit comme un guichet central pour accélérer la transition
        agricole et alimentaire en Belgique. Nous rassemblons agriculteurs, techniciens, entreprises agroalimentaires,
        experts et citoyens… <strong>de la fourche à la fourchette</strong>, pour innover et réussir la transition
        vers des systèmes durables et résilients.
      </p>
      <p class="text-gray-700 leading-relaxed">
        Chaque acteur a un rôle à jouer. En réunissant tous les maillons – du champ à l’assiette – nous formons une
        famille agroécologique où <strong>l’union fait la vie</strong>. HoA se positionne en tiers de confiance pour
        partager savoirs et outils.
      </p>
      <p class="text-gray-700 leading-relaxed">
        <strong>Rejoignez le mouvement !</strong> Agriculteur, entrepreneur ou citoyen, découvrez nos services et
        adhérez pour faire de l’agroécologie la norme de demain.
      </p>
      <div class="flex justify-center space-x-4 pt-4">
        <x-hoa-button url="{{ route('register') }}">Adhérer dès maintenant</x-hoa-button>
        <x-hoa-button url="{{ route('about') }}" variant="outline">En savoir plus</x-hoa-button>
      </div>
    </div>
  </section>

  {{-- Espaces clés --}}
  <section class="py-20">
    <div class="max-w-4xl mx-auto text-center mb-12 px-4">
      <h2 class="font-sourcecode text-3xl text-hoa-green mb-4">Nos espaces clés</h2>
      <p class="text-gray-700">Apprendre – S’informer – Partager pour progresser ensemble</p>
    </div>
    <div class="max-w-5xl mx-auto grid sm:grid-cols-3 gap-8 px-4">
      <x-hoa-card title="Apprendre"
                  icon="{{ asset('images/home/home-icons/apprendre.png') }}"
                  url="{{ route('apprendre') }}">
        Formations en ligne et sur le terrain.
      </x-hoa-card>
      <x-hoa-card title="S’informer"
                  icon="{{ asset('images/home/home-icons/informer.png') }}"
                  url="{{ route('s-informer') }}">
        Actualités, ressources et documentation.
      </x-hoa-card>
      <x-hoa-card title="Partager"
                  icon="{{ asset('images/home/home-icons/partager.png') }}"
                  url="{{ route('partager') }}">
        Retours d’expérience et portraits de fermes.
      </x-hoa-card>
    </div>
  </section>

  <section class="bg-white">
    <div class="max-w-7xl mx-auto">
      <div
        x-data="{
          slides: {!! $slidesJson !!},
          current: 0,
          timer: null,
          init() {
            this.timer = setInterval(() => this.current = (this.current + 1) % this.slides.length, 5000)
          },
          prev() { clearInterval(this.timer); this.current = (this.current + this.slides.length - 1) % this.slides.length; this.init() },
          next() { clearInterval(this.timer); this.current = (this.current + 1) % this.slides.length; this.init() }
        }"
        x-init="init()"
        class="relative overflow-hidden h-96"
      >
        <template x-for="(slide, i) in slides" :key="i">
          <div
            x-show="i===current"
            class="absolute inset-0 grid grid-cols-3 grid-rows-2 gap-1 transition-opacity duration-700"
            x-transition
          >
            <template x-for="img in slide" :key="img">
              <img :src="`{{ asset('') }}${img}`" alt="" class="w-full h-full object-cover"/>
            </template>
          </div>
        </template>
        <button @click="prev()"
                class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-hoa-yellow p-2 rounded-full shadow">
          <x-heroicon-o-chevron-left class="w-5 h-5 text-white"/>
        </button>
        <button @click="next()"
                class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-hoa-yellow p-2 rounded-full shadow">
          <x-heroicon-o-chevron-right class="w-5 h-5 text-white"/>
        </button>
      </div>
    </div>
  </section>

  {{-- Événements --}}
  <section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto lg:grid lg:grid-cols-2 gap-8 px-4">
      <div class="order-2 lg:order-1 flex flex-col justify-center">
        <h2 class="font-diazo text-4xl text-gray-800 mb-4">Nos événements</h2>
        <p class="text-gray-700 mb-6 leading-relaxed">
          HoA organise des ateliers, webinaires et rencontres pour inspirer, former et connecter les acteurs
          agricoles autour de l’agroécologie, du champ à l’assiette.
        </p>
        <div class="flex space-x-4">
          <x-hoa-button url="#" variant="outline">Voir le calendrier</x-hoa-button>
          <x-hoa-button url="#" class="bg-gray-800 text-white hover:bg-gray-700">Contactez-nous</x-hoa-button>
        </div>
      </div>
      <div class="order-1 lg:order-2 h-80 overflow-hidden rounded-lg shadow">
        <img src="{{ asset('images/formation1.jpg') }}" alt="Événement HoA" class="w-full h-full object-cover"/>
      </div>
    </div>
  </section>

  {{-- Témoignage --}}
  <section class="py-16">
    <div class="max-w-3xl mx-auto px-4 text-center">
      <blockquote class="italic text-2xl text-gray-700 mb-6">
        « Grâce à HoA, j’ai pu rencontrer d’autres agriculteurs pionniers et innover en toute confiance. »
      </blockquote>
      <p class="font-sourcecode text-hoa-green">– Un membre HoA</p>
    </div>
  </section>

  {{-- Logos partenaires --}}
  <section class="bg-white py-16">
    <div class="max-w-5xl mx-auto px-4 text-center mb-8">
      <h3 class="font-diazo text-2xl text-gray-600">Avec le soutien de</h3>
    </div>
    <div class="max-w-6xl mx-auto flex flex-wrap justify-center gap-8 px-4">
      @foreach(['logo1.png','logo2.png','logo3.png','logo4.png','logo5.png','logo6.png'] as $logo)
        <img src="{{ asset('images/home/soutienLogo/'.$logo) }}"
             alt="Partenaire" class="h-12 opacity-80 hover:opacity-100"/>
      @endforeach
    </div>
  </section>

  {{-- CTA final --}}
  <section class="bg-hoa-yellow py-16 text-center text-white">
    <h2 class="font-diazo text-3xl mb-4">Prêt à rejoindre notre famille agroécologique&nbsp;?</h2>
    <p class="max-w-2xl mx-auto mb-6">
      Devenez membre HoA et participez activement à la transition agroécologique.
    </p>
    <x-hoa-button url="{{ route('register') }}" variant="white">Je rejoins HoA →</x-hoa-button>
  </section>

  {{-- Navigation footer --}}
  <section class="py-12">
    <div class="max-w-4xl mx-auto flex justify-between text-hoa-green text-lg font-semibold px-4">
      <a href="{{ route('contact') }}" class="hover:underline">&laquo; Aide & Contact</a>
      <a href="{{ route('partager') }}" class="hover:underline">Partager &raquo;</a>
    </div>
  </section>

</x-hoa-layout>
