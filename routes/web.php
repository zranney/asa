<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\CalendrierController;
use App\Http\Controllers\ClassementController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JoueurController;
use App\Http\Controllers\MatchEventController;
use App\Http\Controllers\RencontreController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Middleware\AdminAccessMiddleware;

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

Route::get('/admin/auth', [AdminAuthController::class, 'showAuthForm'])->name('admin.auth');
Route::post('/admin/auth', [AdminAuthController::class, 'login'])->name('admin.login');

Route::prefix('admin')->middleware(AdminAccessMiddleware::class)->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/joueurs/create', [AdminDashboardController::class, 'createJoueur'])->name('admin.joueurs.create');
    Route::post('/joueurs/store', [AdminDashboardController::class, 'storeJoueur'])->name('admin.joueurs.store');
    Route::get('/joueurs', [AdminDashboardController::class, 'indexJoueurs'])->name('admin.joueurs.index');
});
Route::post('/admin/auth/check', [AdminAuthController::class, 'checkCode'])->name('admin.auth.check');  
Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');           
Route::get('/admin/logout', function () {
    session()->forget('admin_access');
    return redirect()->route('admin.auth');
})->name('admin.logout');


Route::resource('matchs', MatchEventController::class);


/* 
Route::get('/joueurs/create', [JoueurController::class, 'create'])->name('joueurs.create');
Route::post('/joueurs', [JoueurController::class, 'store'])->name('joueurs.store');
Route::get('/joueurs', [JoueurController::class, 'index'])->name('joueurs.index'); */
