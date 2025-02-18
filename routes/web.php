<?php

use App\Http\Controllers\CalendrierController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JoueurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
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


/* 
Route::get('/joueurs/create', [JoueurController::class, 'create'])->name('joueurs.create');
Route::post('/joueurs', [JoueurController::class, 'store'])->name('joueurs.store');
Route::get('/joueurs', [JoueurController::class, 'index'])->name('joueurs.index'); */
