<?php

namespace App\Http\Controllers;
use App\Models\Calendrier_event;
use Illuminate\Http\Request;
use App\Models\Classement;
use App\Models\Equipe;
use App\Models\MatchEvent;
use Carbon\Carbon;
class CalendrierController extends Controller
{
    //
    public function index(){
        $calendrier_event=Calendrier_event::all();

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
        

        $now = Carbon::now();
       // Supprimer les matchs où la date et l'heure sont dépassées
    MatchEvent::where(function ($query) use ($now) {
        $query->where('date', '<', $now->toDateString()) // Matchs avant aujourd'hui
              ->orWhere(function ($q) use ($now) {
                  $q->where('date', '=', $now->toDateString()) // Matchs aujourd'hui
                    ->where('heure', '<=', $now->toTimeString()); // Mais l'heure est déjà passée
              });
    })
    ->delete();

        $matchs = MatchEvent::with(['domicile', 'exterieur'])
        ->whereDate('date', '>=', Carbon::today()) // Prendre uniquement les matchs futurs
        ->orderBy('date', 'asc') // Trier par date du plus proche au plus lointain
        ->orderBy('heure', 'asc') // Trier aussi par heure
        ->get();
        
    
        return view('calendrier', compact('calendrier_event', 'classements', 'matchs'));
    }
}
