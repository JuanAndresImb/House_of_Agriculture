<?php

namespace App\Http\Controllers;

use App\Services\BookStack\BookService;
use Illuminate\Http\Request;
use App\Services\BookStack\BookStackService;


class BookStackController extends Controller
{
    /**
     * Liste les livres disponibles dans BookStack
     */
    public function index(BookStackService $bookStack)
    {
        $books = $bookStack->getBooks()['data'] ?? [];
        $headerTitle = 'Livres Bookstack';
        return view('bookstack.books', compact('books', 'headerTitle'));
    }

    /**
     * Affiche le formulaire pour créer une page
     */
    public function showCreateForm(BookStackService $bookStack)
    {
        $books = $bookStack->getBooks()['data'] ?? [];
        $headerTitle = 'Créer une page Bookstack';
        return view('bookstack.create', compact('books', 'headerTitle'));
    }

    /**
     * Envoie la nouvelle page à l'API BookStack
     */
    public function storePage(Request $request, BookStackService $bookStack)
    {
        $validated = $request->validate([
            'book_id' => 'required|integer',
            'title' => 'required|string|max:255',
            'html' => 'required|string',
        ]);

        $page = $bookStack->createPage(
            $validated['book_id'],
            $validated['title'],
            $validated['html']
        );

        return redirect()->route('bookstack.createPage')
            ->with('success', 'Page créée avec succès dans BookStack !');
    }
    //Montre une page specifique
    public function showPage(int $id, BookStackService $bookStack)
    {
        $page = $bookStack->getPage($id)['data'] ?? null;
        abort_if(!$page, 404);
        return view('bookstack.show', [
            'page' => $page,
            'headerTitle' => 'Afficher la page : ' . $page['name']
        ]);
    }

    //Afficher les pages d'un book dans Booksctack

    public function showBookPages(int $bookidn, BookService $bookStack)
    {
        $book = $bookStack->getBookPages($bookId);
        $pages = $bookStack->getBookPages($bookId);
        return view('bookstack.book-pages', compact('book', 'pages'));
    }

}
