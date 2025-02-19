<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rencontre;
use App\Models\Equipe;
use App\Models\Classement;
use App\Models\MatchEvent;

class RencontreController extends Controller
{
    public function index()
    {
        $rencontres = Rencontre::with(['equipe1', 'equipe2'])->latest()->take(3)->get();
        return view('rencontres.index', compact('rencontres'));
    }

    public function create()
    {
        $equipes = Equipe::all();
        return view('rencontres.create', compact('equipes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'equipe_1_id' => 'required|exists:equipes,id',
            'equipe_2_id' => 'required|exists:equipes,id',
            'score_equipe_1' => 'required|integer|min:0',
            'score_equipe_2' => 'required|integer|min:0',
        ]);

        $rencontre = Rencontre::create([
            'equipe_1_id' => $request->equipe_1_id,
            'equipe_2_id' => $request->equipe_2_id,
            'score_equipe_1' => $request->score_equipe_1,
            'score_equipe_2' => $request->score_equipe_2,
        ]);

        
        // Mise à jour automatique du classement après le match
        $rencontre->updateClassement();

        return redirect()->route('rencontres.index')->with('success', 'Match ajouté avec succès et classement mis à jour.');
    }
    
}

