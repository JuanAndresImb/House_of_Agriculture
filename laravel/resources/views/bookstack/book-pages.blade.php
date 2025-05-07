<x-hoa-layout>
  <h1 class="text-3xl font-diazo text-hoa-green mb-6">Pages du livre : {{ $book['name'] }}</h1>

  @if (count($pages))
    <ul class="space-y-3">
      @foreach ($pages as $page)
        <li class="border p-4 rounded bg-white">
          <strong>{{ $page['name'] }}</strong><br>
          <a href="{{ route('bookstack.showPage', $page['id']) }}" class="text-blue-600 hover:underline">
            Voir la page
          </a>
        </li>
      @endforeach
    </ul>
  @else
    <p>Aucune page disponible.</p>
  @endif
</x-hoa-layout>

