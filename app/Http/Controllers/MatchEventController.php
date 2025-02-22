<?php

namespace App\Http\Controllers;

use App\Models\MatchEvent;
use App\Models\Equipe;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MatchEventController extends Controller
{
    public function create()
    {
        $equipes = Equipe::all(); // Récupérer toutes les équipes
        return view('matchs.create', compact('equipes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'domicile_id' => 'required|exists:equipes,id',
            'exterieur_id' => 'required|exists:equipes,id',
            'date' => 'required|date',
            'heure' => 'required|date_format:H:i',
            'lieu' => 'required|string|max:255',
            'title' => 'required|string|max:255',
        ]);

        MatchEvent::create([
            'domicile_id' => $request->domicile_id,
            'exterieur_id' => $request->exterieur_id,
            'date' => $request->date,
            'heure' => $request->heure,
            'lieu' => $request->lieu,
            'titre'=>$request->title,
        ]);

        // Récupérer tous les matchs
        $matchs = MatchEvent::where('date', '>=', Carbon::now()) // Prendre seulement les matchs futurs
        ->orderBy('date', 'asc') // Trier par date la plus proche en premier
        ->get();

        return redirect()->route('calendrier', compact('matchs'))->with('success', 'Match enregistré avec succès !');
    }
}
