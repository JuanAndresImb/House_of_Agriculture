{{-- resources/views/home.blade.php --}}
<x-hoa-layout>

  {{-- 1. Hero --}}
  <section class="bg-white py-16">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center">
      {{-- Texte + CTA --}}
      <div class="md:w-1/2 space-y-4">
        <h2 class="text-4xl font-bold text-green-800">House of Agroecology</h2>
        <p class="text-gray-600">
          Quæ tibi placent quicunque prosunt aut dilige­bat multum, quod memor sis ad communia sunt ab initio minima.
        </p>
        <a href="{{ route('register') }}"
           class="inline-block bg-green-600 text-white px-6 py-3 rounded hover:bg-green-700 transition">
          S'inscrire
        </a>
      </div>
      {{-- Illustration --}}
      <div class="md:w-1/2 mt-8 md:mt-0">
        <img src="{{ asset('images/hero-illustration.png') }}"
             alt="Illustration Agroécologie"
             class="w-full rounded shadow-lg">
      </div>
    </div>
  </section>

  {{-- 2. Accès rapides --}}
  <section class="py-12 bg-gray-50">
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-3 gap-6">
      <a href="{{ route('courses.index') }}"
         class="bg-white p-6 rounded shadow hover:shadow-lg text-center">
        <x-heroicon-o-book-open class="h-12 w-12 mx-auto text-green-600"/>
        <h3 class="mt-4 font-semibold">Cours</h3>
      </a>
      <a href="{{ route('fiches.index') }}"
         class="bg-white p-6 rounded shadow hover:shadow-lg text-center">
        <x-heroicon-o-document-text class="h-12 w-12 mx-auto text-green-600"/>
        <h3 class="mt-4 font-semibold">Fiches</h3>
      </a>
      <a href="{{ route('resources.map') }}"
         class="bg-white p-6 rounded shadow hover:shadow-lg text-center">
        <x-heroicon-o-map class="h-12 w-12 mx-auto text-green-600"/>
        <h3 class="mt-4 font-semibold">Carte</h3>
      </a>
    </div>
  </section>

  {{-- 3. Carousel projets --}}
  <section class="py-12">
    <div class="max-w-6xl mx-auto" x-data="{
          slides: [
            { image: '{{ asset('images/projet1.jpg') }}', title: 'Projet 1' },
            { image: '{{ asset('images/projet2.jpg') }}', title: 'Projet 2' },
            { image: '{{ asset('images/projet3.jpg') }}', title: 'Projet 3' },
          ],
          current: 0,
          next() { this.current = (this.current+1) % this.slides.length; },
          prev() { this.current = (this.current-1+this.slides.length) % this.slides.length; }
        }">
      <h2 class="text-2xl font-bold text-center mb-6">Nos différents projets</h2>
      <div class="relative">
        <div class="overflow-hidden">
          <div class="flex transition-transform duration-500"
               :style="`transform: translateX(-${current * 100}%);`">
            <template x-for="slide in slides" :key="slide.title">
              <div class="flex-shrink-0 w-full">
                <img :src="slide.image" class="w-full h-64 object-cover rounded" alt="" />
                <p class="mt-2 text-center font-medium" x-text="slide.title"></p>
              </div>
            </template>
          </div>
        </div>
        <button @click="prev()"
                class="absolute left-0 top-1/2 transform -translate-y-1/2 text-yellow-500 text-3xl p-2">
          ‹
        </button>
        <button @click="next()"
                class="absolute right-0 top-1/2 transform -translate-y-1/2 text-yellow-500 text-3xl p-2">
          ›
        </button>
      </div>
    </div>
  </section>

  {{-- 4. Logos partenaires --}}
  <section class="py-12 bg-gray-50">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-2xl font-bold mb-6">Avec le soutien de</h2>
      <div class="flex items-center justify-center space-x-6 overflow-x-auto px-4">
        @foreach(['part1.png','part2.png','part3.png','part4.png'] as $logo)
          <img src="{{ asset('images/'.$logo) }}"
               alt="Partenaire"
               class="h-16 w-16 object-contain rounded-full bg-white p-2 shadow" />
        @endforeach
      </div>
    </div>
  </section>

</x-hoa-layout>
