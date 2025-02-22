<?php

use App\Http\Controllers\CalendrierController;
use App\Http\Controllers\ClassementController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JoueurController;
use App\Http\Controllers\MatchEventController;
use App\Http\Controllers\RencontreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/equipe', function () {
    return view('equipe');
});
Route::get('/club', function(){
    return view('club');
});
Route::get('/calendrier', [CalendrierController::class, 'calendar']);
Route::get('/galerie', function(){
    return view('galerie');
});
Route::get('/contact', function(){
    return view('contact');
});
Route::resource('rencontres', RencontreController::class);
Route::get('/calendrier', [CalendrierController::class, 'index'])->name('calendrier');
Route::get('/classement', [ClassementController::class, 'index'])->name('classement.index');
Route::get('/actualite/{id}/ajax', [HomeController::class, 'getActualite'])->name('actualite.ajax');

// Route pour afficher le formulaire
Route::get('/actualites/create', [HomeController::class, 'create'])->name('actualites.create');

// Route pour enregistrer l'actualité
Route::post('/actualites/store', [HomeController::class, 'store'])->name('actualites.store');
Route::get('/equipe', [JoueurController::class, 'equipe'])->name('equipe');



Route::resource('matchs', MatchEventController::class);


/* 
Route::get('/joueurs/create', [JoueurController::class, 'create'])->name('joueurs.create');
Route::post('/joueurs', [JoueurController::class, 'store'])->name('joueurs.store');
Route::get('/joueurs', [JoueurController::class, 'index'])->name('joueurs.index'); */
