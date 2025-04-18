<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookStackController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;

Route::middleware(['auth'])->group(function () {
    Route::resource('courses', CourseController::class);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');





Route::middleware(['auth'])->group(function () {
    Route::get('/bookstack/books', [BookStackController::class, 'index'])->name('bookstack.books');
    Route::get('/bookstack/create', [BookStackController::class, 'showCreateForm'])->name('bookstack.createPage');
    Route::post('/bookstack/create', [BookStackController::class, 'storePage'])->name('bookstack.storePage');
    Route::post('/bookstack/page/{id}', [BookStackController::class, 'showPage'])->name('bookstack.showPage');
    Route::view('/', 'home')->name('home');
    Route::view('/mission', 'mission')->name('mission');
    Route::view('/partager', 'pages.share')->name('share');
    Route::view('/apprendre', 'pages.learn')->name('learn');
    Route::view('/s-informer', 'pages.inform')->name('inform');
    Route::view('/contact', 'pages.contact')->name('contact');
});
