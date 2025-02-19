<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\Calendrier_event;
use App\Models\Classement;
use App\Models\Equipe;
use App\Models\MatchEvent;
use App\Models\Rencontre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $calendrier_event=Calendrier_event::all();

        // Récupérer toutes les équipes
        $equipes = Equipe::with('classement')->get();
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
        $classements = $classements->sort(function ($a, $b) {
            // D'abord, trier par points (ordre décroissant)
            if ($a['points'] !== $b['points']) {
                return $b['points'] <=> $a['points'];
            }
        
            // Ensuite, trier par goal différentiel (ordre décroissant)
            if ($a['goal_differentiel'] !== $b['goal_differentiel']) {
                return $b['goal_differentiel'] <=> $a['goal_differentiel'];
            }
        
            // Enfin, trier par ordre alphabétique (ordre croissant)
            return strcmp($a['nom'], $b['nom']);
        })->values();

        $matchs = MatchEvent::all();
        $rencontres = Rencontre::with(['equipe1', 'equipe2'])->get();
        $actualites = Actualite::orderBy('date_publication', 'desc')->get();

        

    return view('welcome', compact('classements', 'equipes', 'matchs', 'rencontres', 'actualites')); // Passer la variable à la vue
    }

    public function getActualite($id)
{
    $actualite = Actualite::findOrFail($id);
    return response()->json($actualite);
}
}
