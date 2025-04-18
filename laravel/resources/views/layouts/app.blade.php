<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts - inspiration ilesdepaix.org -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    @stack('styles')
</head>

<body class="font-raleway bg-gray-50 text-gray-800 antialiased">

    <x-banner />

    <div class="min-h-screen flex flex-col">
        <!-- Menu principal -->
        @livewire('navigation-menu')

        <!-- En-tête -->
        @if (isset($header))
            <header class="bg-white shadow-sm border-b">
                <div class="max-w-7xl mx-auto py-4 px-6">
                    <h1 class="text-2xl font-semibold text-gray-900">
                        {{ $header }}
                    </h1>
                </div>
            </header>
        @endif

        <!-- NAVIGATION BookStack -->
        @hasSection('bookstack-nav')
            <div class="bg-white border-b">
                <div class="max-w-7xl mx-auto px-6 py-3">
                    @yield('bookstack-nav')
                </div>
            </div>
        @endif

        <!-- Contenu principal -->
        <main class="flex-grow py-8">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>

        <!-- Pied de page -->
        <footer class="bg-white border-t mt-10 text-sm text-center text-gray-500 py-4">
            © {{ date('Y') }} {{ config('app.name') }} – Inspiré par <a href="https://www.ilesdepaix.org" class="text-blue-500 hover:underline">ilesdepaix.org</a>
        </footer>
    </div>

    @stack('modals')
    @livewireScripts
</body>
</html>
