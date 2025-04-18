<!-- resources/views/bookstack/_nav.blade.php -->
<nav class="bg-gray-100 p-4 mb-6 rounded">
  <ul class="flex space-x-4">
    <li><a href="{{ route('bookstack.books') }}" class="text-blue-600 hover:underline">Livres</a></li>
    <li><a href="{{ route('bookstack.createPage') }}" class="text-blue-600 hover:underline">Créer une page</a></li>
    <!-- Si on est dans show, proposer Edit et Delete -->
    @isset($page)
      <li><a href="{{ route('bookstack.showPage', $page['id']) }}" class="text-blue-600 hover:underline">Voir</a></li>
      <li><a href="{{ route('bookstack.editPage', $page['id']) }}" class="text-blue-600 hover:underline">Éditer</a></li>
      <li><a href="{{ route('bookstack.confirmDelete', $page['id']) }}" class="text-red-600 hover:underline">Supprimer</a></li>
    @endisset
  </ul>
</nav>
