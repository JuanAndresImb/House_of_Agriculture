<x-app-layout>

<div class="max-w-3xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-6">Créer une page BookStack</h2>

    <form method="POST" action="{{ route('bookstack.storePage') }}">
        @csrf

        <!-- Sélecteur de livre -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Livre</label>
            <select name="book_id" class="w-full border border-gray-300 rounded px-3 py-2">   
            @foreach ($books as $book)
                    <option value="{{ $book['id'] }}">{{ $book['name'] }}</option>
                @endforeach
            </select>
        </div>

        <!-- Titre -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Titre de la page</label>
            <input type="text" name="title" required class="w-full border border-gray-300 rounded px-3 py-2" placeholder="Ex: Introduction au compost">
        </div>

        <!-- Contenu HTML -->
        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-1">Contenu HTML</label>
            <textarea name="html" rows="8" class="w-full border border-gray-300 rounded px-3 py-2" placeholder="<p>Contenu de votre page...</p>"></textarea>
        </div>

        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            Créer la page
        </button>
    </form>
</div>

</x-app-layout>