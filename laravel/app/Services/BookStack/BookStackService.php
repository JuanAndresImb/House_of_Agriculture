<?php

namespace App\Services\BookStack;

class BookStackService
{
    protected BookStackClient $client;
    

    public function __construct(BookStackClient $client)
    {
        $this->client = $client;
    }

    // 🧾 Obtenir la liste des livres
    public function getBooks()
    {
        return $this->client->get('/books');
    }

    // 📘 Créer une nouvelle page
    public function createPage(int $bookId, string $title, string $content)
    {
        return $this->client->post('/pages', [
            'book_id' => $bookId,
            'name' => $title,
            'html' => $content,
        ]);
    }

    // 📄 Obtenir une page spécifique
    public function getPage(int $pageId)
    {
        return $this->client->get("/pages/{$pageId}");
    }

    // 📜 Afficher les pages d'un livre Bookstack 
    public function getBookPages(int $bookId)
    {
        return $this->client->get("/api/books/{$bookId}/pages")['data'] ?? [];
    }

    // 🔁 Modifier une page existante
    public function updatePage(int $pageId, string $title, string $content)
    {
        return $this->client->put("/pages/{$pageId}", [
            'name' => $title,
            'html' => $content,
        ]);
    }

    // 🗑 Supprimer une page
    public function deletePage(int $pageId)
    {
        return $this->client->delete("/pages/{$pageId}");
    }
}
