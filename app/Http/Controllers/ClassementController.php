<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classement;
use App\Models\Equipe;

class ClassementController extends Controller
{
    public function index()
    {
        // Récupérer toutes les équipes
        $equipes = Equipe::with('classement')->get();

        // Construire le classement avec initialisation à 0 si besoin
        $classements = $equipes->map(function ($equipe) {
            return [
                'nom' => $equipe->nom,
                'points' => $equipe->classement->points ?? 0,
                'buts_marques' => $equipe->classement->buts_marques ?? 0,
                'buts_encaisses' => $equipe->classement->buts_encaisses ?? 0,
                'goal_differentiel' => ($equipe->classement->buts_marques ?? 0) - ($equipe->classement->buts_encaisses ?? 0),
                'joues' => $equipe->classement->joues ?? 0,
                'gagnes' => $equipe->classement->gagnes ?? 0,
                'nuls' => $equipe->classement->nuls ?? 0,
                'perdus' => $equipe->classement->perdus ?? 0,
            ];
        });

        // Trier selon les critères demandés
        $classements = $classements->sortByDesc('points')
                                   ->sortByDesc('goal_differentiel')
                                   ->sortBy('nom') // En dernier pour respecter l'ordre alphabétique si tout est égal
                                   ->values(); // Réindexer les clés du tableau

        return view('classement.index', compact('classements'));
    }
}
