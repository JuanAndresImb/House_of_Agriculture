<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'House of Agroecology') }}</title>

  <!-- Fonts & Styles -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @livewireStyles
  @stack('styles')
</head>

<body class="font-raleway text-gray-800 bg-gray-50 flex flex-col min-h-screen">

  <!-- HEADER -->
  <header class="bg-white border-b shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
      <!-- Logo + titre -->
      <div class="flex items-center space-x-3">
        <img src="{{ asset('images/LOGO-HOA-VERTICAL-RVB.png') }}" alt="Logo HOA" class="h-48 w-55">
        <span class="text-xl font-bold text-green-800">{{ config('app.name') }}</span>
      </div>

      <!-- Menu principal -->
      <nav class="hidden md:flex space-x-6 text-sm font-semibold text-gray-700">
        @include('partials._main-nav')
      </nav>

      <!-- Profil + burger mobile -->
      <div class="flex items-center space-x-4">
        <a href="{{ route('profile.show') }}" title="Mon compte" class="text-gray-600 hover:text-green-700">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
               viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M5.121 17.804A9 9 0 1118.88 6.197 9 9 0 015.121 17.804z"/>
          </svg>
        </a>
        <button class="md:hidden text-gray-600 hover:text-green-700">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
               viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>
    </div>
  </header>

  <!-- CONTENU -->
  <main class="flex-grow py-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      {{ $slot }}
    </div>
  </main>

  <!-- NAVIGATION PRÉCÉDENT / SUIVANT -->
  <div class="border-t bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex justify-between">
      <a href="{{ url()->previous() }}" class="text-yellow-500 font-semibold hover:underline">
        &larr; Précédent
      </a>
      <a href="{{ route('home') }}" class="text-yellow-500 font-semibold hover:underline">
        Suivant &rarr;
      </a>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="bg-white border-t text-sm text-gray-600">
    <div class="max-w-7xl mx-auto py-10 px-6 grid md:grid-cols-4 gap-6">
      <!-- Quod Enchiridion -->
      <div>
        <h4 class="font-bold mb-2">Quod Enchiridion</h4>
        <ul class="space-y-1">
          <li><a href="#" class="hover:underline">Quod Enchiridion</a></li>
          <li><a href="#" class="hover:underline">Quod Enchiridion</a></li>
        </ul>
      </div>
      <!-- À propos -->
      <div>
        <h4 class="font-bold mb-2">À propos</h4>
        <ul class="space-y-1">
          <li><a href="{{ route('mission') }}" class="hover:underline">Notre mission</a></li>
          <li><a href="#" class="hover:underline">L’équipe</a></li>
        </ul>
      </div>
      <!-- Newsletter -->
      <div>
        <h4 class="font-bold mb-2">Newsletter</h4>
        <form class="space-y-2">
          <input type="email" name="email" placeholder="Votre e-mail" class="w-full border px-3 py-2 rounded" required>
          <input type="text" name="name" placeholder="Votre nom" class="w-full border px-3 py-2 rounded" required>
          <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
            S’inscrire
          </button>
        </form>
      </div>
      <!-- Réseaux sociaux -->
      <div class="flex items-end space-x-3">
        <a href="https://linkedin.com/" target="_blank">
          <img src="{{ asset('icons/linkedin.svg') }}" class="h-6 w-6" alt="LinkedIn">
        </a>
        <a href="https://instagram.com/" target="_blank">
          <img src="{{ asset('icons/instagram.svg') }}" class="h-6 w-6" alt="Instagram">
        </a>
        <a href="https://facebook.com/" target="_blank">
          <img src="{{ asset('icons/facebook.svg') }}" class="h-6 w-6" alt="Facebook">
        </a>
      </div>
    </div>
    <div class="text-center text-xs text-gray-400 pb-4">
      © {{ date('Y') }} {{ config('app.name') }} — Tous droits réservés
    </div>
  </footer>

  @stack('modals')
  @livewireScripts
</body>
</html>
