<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'House of Agroecology') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-raleway text-gray-800 bg-gray-50">

    <!-- HEADER -->
    <header class="bg-white border-b shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <!-- Logo + Titre -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo-hoa.png') }}" alt="Logo" class="h-10">
                <span class="text-xl font-bold text-green-800">House of Agroecology</span>
            </div>

            <!-- Menu principal -->
            <nav class="hidden md:flex space-x-6 text-sm font-semibold text-gray-700">
                <a href="#" class="hover:text-green-700">Accueil</a>
                <a href="#" class="hover:text-green-700">Partager</a>
                <a href="#" class="hover:text-green-700">Apprendre</a>
                <a href="#" class="hover:text-green-700">S’informer</a>
                <a href="#" class="hover:text-green-700">Aide/Contact</a>
            </nav>

            <!-- Profil + menu mobile -->
            <div class="flex items-center space-x-4">
                <a href="#" title="Mon compte">
                    <svg class="w-6 h-6 text-gray-600 hover:text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5.121 17.804A9 9 0 1118.88 6.197 9 9 0 015.121 17.804z"></path>
                    </svg>
                </a>
                <button class="md:hidden">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- CONTENU -->
    <main class="py-8">
        <div class="max-w-6xl mx-auto px-4">
            {{ $slot }}
        </div>
    </main>

    <!-- FLECHES DE NAVIGATION -->
    <div class="fixed bottom-8 left-8">
        <a href="#" class="text-yellow-500 text-2xl hover:scale-110 transition">&#8592; S’informer</a>
    </div>
    <div class="fixed bottom-8 right-8">
        <a href="#" class="text-yellow-500 text-2xl hover:scale-110 transition">Accueil &#8594;</a>
    </div>

    <!-- FOOTER -->
    <footer class="bg-white border-t mt-16 text-sm text-gray-600">
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

    @livewireScripts
</body>
</html>
