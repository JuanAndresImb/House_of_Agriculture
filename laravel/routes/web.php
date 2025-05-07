<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookStackController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ApprendreController;
use App\Http\Controllers\RetexController;
use App\Http\Controllers\PortraitController;
use App\Http\Controllers\ProjectController;
use App\Models\Document;



Route::middleware(['auth'])->group(function () {
    // CRUD Cours
    Route::resource('courses', CourseController::class);

    // BookStack
    Route::get('/bookstack/books',   [BookStackController::class, 'index'])->name('bookstack.books');
    Route::get('/bookstack/create',  [BookStackController::class, 'showCreateForm'])->name('bookstack.createPage');
    Route::get('/bookstack/book/{bookId}/pages', [BookStackController::class, 'showBookPages'])->name('bookstack.bookPages');
    Route::post('/bookstack/create', [BookStackController::class, 'storePage'])->name('bookstack.storePage');
    Route::post('/bookstack/page/{id}', [BookStackController::class, 'showPage'])->name('bookstack.showPage');
    

    // Dashboard (exemple)
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    // ----------------------------
    //  Pages statiques simples
    // ----------------------------
    Route::view('/',           'pages.home')->name('home');
    Route::view('/mission',    'pages.mission')->name('mission');
    //Route::view('/s-informer', 'pages.inform')->name('s-informer');
    Route::view('/contact',    'pages.contact')->name('contact');
    Route::view('/about',      'pages.about')->name('about');
    Route::view('/donate',     'pages.donate')->name('donate');
    Route::view('/newsletter/subscribe', 'pages.newsletter')->name('newsletter.subscribe');

    // ----------------------------
    //  Apprendre et ses sous‑pages
    // ----------------------------
    // Landing “Apprendre”
    Route::view('/apprendre', 'pages.apprendre')->name('apprendre');

    // E‑learning
    Route::get('/apprendre/elearning',  [ApprendreController::class, 'elearning'])->name('apprendre.elearning');
    // Formations terrain
    Route::get('/apprendre/formations', [ApprendreController::class, 'formations'])->name('apprendre.formations');

    // ----------------------------
    //  Partager et ses sous‑pages
    // ----------------------------
    // Landing “Partager” → RETEX par défaut
    Route::get('/partager',            [RetexController::class, 'index'])->name('partager');

    // RETEX
    Route::get('/partager/retex',      [RetexController::class, 'index'])->name('partager.retex');
    Route::get('/retex/{retex}',       [RetexController::class, 'show'])->name('retex.show');

    // Portraits de fermes
    Route::get('/partager/portraits',  [PortraitController::class, 'index'])->name('partager.portraits');
    Route::get('/farms/{farm}',        [PortraitController::class, 'show'])->name('farm.show');

    // Projets HoA (exclusif membres)
    Route::get('/partager/projets',    [ProjectController::class, 'index'])->name('partager.projets');
    Route::get('/projects/{project}',  [ProjectController::class, 'show'])->name('project.show');

    //s'informer
    Route::view('/s-informer', 'pages.inform')->name('s-informer');

    Route::get('/s-informer/actualites', function () {
        $actualites = \App\Models\Actualite::latest()->paginate(9); // 
        return view('pages.inform-actualites', compact('actualites'));
    })->name('s-informer.actualites');



    Route::get('/s-informer/ressources', function () {
        $documents = Document::latest()->paginate(12);

        return view('pages.inform-ressources', compact('documents'));
    })
        ->middleware('auth')                      // protégé : seuls les membres connectés y accèdent
        ->name('s-informer.ressources');
});
