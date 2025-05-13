<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    .text-hoa-green { color: #5dad56; }
    .bg-hoa-yellow { background-color: #eebf34; }
    .hover\:text-hoa-brown:hover { color: #a0601a; }
  </style>
  @livewireStyles
  @stack('styles')
</head>

<body class="font-sofiapro text-gray-900 bg-gray-50 min-h-screen flex flex-col">

  {{-- HEADER identique --}}
  <header class="bg-white border-b-2 border-yellow-300 shadow-sm z-50 sticky top-0">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
      <a href="{{ route('home') }}" class="flex items-center space-x-3">
        <img src="{{ asset('images/Logo-hoa-horizontal.jpg') }}"
             alt="Logo HOA" class="h-10 w-auto">
        <span class="hidden sm:inline-block text-2xl font-diazo text-hoa-green tracking-wide">
          {{ config('app.name', 'House of Agroecology') }}
        </span>
      </a>

      <nav>
        @include('partials._main-nav')
      </nav>

      <div class="flex items-center space-x-4">
        <a href="{{ route('profile.show') }}"
           class="hidden sm:inline-block text-gray-600 hover:text-hoa-green transition">
          <x-heroicon-o-user class="w-6 h-6" />
        </a>
        <button id="mobile-nav-toggle" class="lg:hidden text-gray-600 hover:text-hoa-green transition">
          <x-heroicon-o-bars-3 class="w-6 h-6" />
        </button>
      </div>
    </div>

    <div id="mobile-nav" class="hidden lg:hidden bg-white border-t border-gray-200">
      <div class="flex flex-col space-y-4 px-6 py-6 text-base font-medium">
        <a href="{{ route('home') }}"       class="text-gray-600 hover:text-hoa-green">Accueil</a>
        <a href="{{ route('apprendre') }}"  class="text-gray-600 hover:text-hoa-green">Apprendre</a>
        <a href="{{ route('partager') }}"   class="text-gray-600 hover:text-hoa-green">Partager</a>
        <a href="{{ route('s-informer') }}" class="text-gray-600 hover:text-hoa-green">S’informer</a>
        <a href="{{ route('about') }}"      class="text-gray-600 hover:text-hoa-green">À propos</a>
        <a href="{{ route('register') }}"
           class="block bg-hoa-yellow text-white text-center py-2 rounded hover:bg-yellow-500">
          Nous rejoindre
        </a>
      </div>
    </div>
  </header>

  {{-- MAIN CONTENT (déverrouillé) --}}
  <main class="flex-grow">
    @isset($hero)
      {{ $hero }}
    @endisset

    @isset($banner)
      {{ $banner }}
    @endisset

    {{-- ICI pas de max-w-* ni de px-* imposé --}}
    {{ $slot }}
  </main>

  {{-- FOOTER identique --}}
  <footer class="bg-white border-t border-gray-200 text-sm text-gray-600">
    <div class="max-w-7xl mx-auto py-10 px-6 grid md:grid-cols-4 gap-6">
      <div>
        <h4 class="font-bold mb-2">Quod Enchiridion</h4>
        <ul class="space-y-1">
          <li><a href="#" class="hover:underline">Quod Enchiridion</a></li>
          <li><a href="#" class="hover:underline">Quod Enchiridion</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-bold mb-2">À propos</h4>
        <ul class="space-y-1">
          <li><a href="#" class="hover:underline">Notre mission</a></li>
          <li><a href="#" class="hover:underline">L’équipe</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-bold mb-2">Newsletter</h4>
        <form class="space-y-2">
          <input type="email" placeholder="Votre adresse e-mail" class="w-full border px-3 py-2 rounded">
          <input type="text" placeholder="Nom" class="w-full border px-3 py-2 rounded">
          <button class="bg-hoa-yellow text-white px-4 py-2 rounded hover:bg-yellow-600">S’inscrire</button>
        </form>
      </div>
      <div class="flex items-end space-x-3">
        <a href="#"><img src="/images/home/networkIcons/linkedin.png" class="h-6" alt="LinkedIn"></a>
        <a href="#"><img src="/images/home/networkIcons/instagram.png" class="h-6" alt="Instagram"></a>
        <a href="#"><img src="/images/home/networkIcons/facebook.png" class="h-6" alt="Facebook"></a>
      </div>
    </div>
    <div class="text-center text-xs text-gray-400 pb-4">
      © {{ date('Y') }} {{ config('app.name', 'House of Agroecology') }} — Tous droits réservés
    </div>
  </footer>

  @stack('modals')
  @livewireScripts

  <script>
    document.getElementById('mobile-nav-toggle')?.addEventListener('click', function () {
      document.getElementById('mobile-nav')?.classList.toggle('hidden');
    });
  </script>
</body>
</html>
