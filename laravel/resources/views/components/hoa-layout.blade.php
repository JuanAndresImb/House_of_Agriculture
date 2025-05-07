<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  ...
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  + <!-- Définition de nos utilitaires via Tailwind config ou inline pour l’exemple -->
  + <style>
    +.text-hoa-green {
      color: #5dad56;
    }

    +.bg-hoa-yellow {
      background-color: #eebf34;
    }

    +.hover\:text-hoa-brown:hover {
      color: #a0601a;
    }

    +
  </style>
  @livewireStyles
  @stack('styles')
</head>

<body class="font-sofiapro text-gray-900 bg-gray-50 min-h-screen flex flex-col">

  <!-- HEADER -->
  <header class="bg-white border-b border-yellow-300">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
      <!-- Logo + Titre -->
      <div class="flex items-center space-x-3">
        <a href="{{ route('home') }}" class="flex items-center">
          <img src="{{ asset('images/LOGO-HOA-HORIZONTAL-RVB.jpg') }}" alt="Logo HOA" class="h-12">
          <span class="text-2xl font-bold text-hoa-green" style="font-family:'Diazo MVB Condensed';">
            {{ config('app.name', 'House of Agroecology') }}
          </span>
        </a>
      </div>

      <!-- Mega‑menu principal (desktop) -->
      <nav class="hidden lg:flex space-x-8 text-base font-semibold">
        + {{-- Ex. : Les items de nav peuvent venir d’un partial ou config --}}
        @include('partials._main-nav')
      </nav>

      <!-- Actions utilisateur & bouton CTA -->
      <div class="flex items-center space-x-4">
        <a href="{{ route('profile.show') }}" title="Mon compte" class="text-gray-600 hover:text-green-600">
          <x-heroicon-o-user class="w-6 h-6" />
        </a>
        + <a href="{{ route('donate') }}"
          + class="hidden md:inline-block bg-hoa-yellow text-white px-4 py-2 rounded hover:bg-yellow-500 font-semibold">
          + Nous soutenir
          + </a>
        <button class="lg:hidden text-gray-600 hover:text-green-600">
          <x-heroicon-o-bars-3 class="w-6 h-6" />
        </button>
      </div>
    </div>

    {{-- MEGA-MENU mobile / desktop (placeholder) --}}
    + <div class="lg:hidden bg-white border-t">
      + @include('partials._mobile-nav')
      + </div>
  </header>

  <!-- OPTIONAL PAGE HEADER -->
  @if (isset($header))
  ...
  @endif

  <!-- MAIN CONTENT -->
  <main class="flex-grow py-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      {{ $slot }}
    </div>
  </main>

  <!-- PAGE NAVIGATION ARROWS (au-dessus du footer) -->
  <!-- <div class="border-t bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex justify-between">
      <a href="{{ url()->previous() }}"
         class="text-hoa-yellow text-lg font-semibold hover:underline">
        &larr; Précédent
      </a>
      <a href="{{ route('home') }}"
         class="text-hoa-yellow text-lg font-semibold hover:underline">
        Suivant &rarr;
      </a>
    </div>
  </div>
-->
  <!-- FOOTER -->
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
          <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">S’inscrire</button>
        </form>
      </div>
      <div class="flex items-end space-x-3">
        <a href="#"><img src="/icons/linkedin.svg" class="h-6" alt="LinkedIn"></a>
        <a href="#"><img src="/icons/instagram.svg" class="h-6" alt="Instagram"></a>
        <a href="#"><img src="/icons/facebook.svg" class="h-6" alt="Facebook"></a>
      </div>
    </div>
    <div class="text-center text-xs text-gray-400 pb-4">
      © {{ date('Y') }} House of Agroecology — Tous droits réservés
    </div>

  </footer>

  @stack('modals')
  @livewireScripts
</body>

</html>