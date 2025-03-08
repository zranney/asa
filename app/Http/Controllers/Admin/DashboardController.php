<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipe;
use App\Models\MatchEvent;
use App\Models\Stade;
use App\Models\Joueur;

class DashboardController extends Controller
{
    //
    public function index() {
        $joueurs = Joueur::all(); // Récupère tous les joueurs
    return view('admin.dashboard', compact('joueurs'));
    }
    public function createJoueur()
    {
        return view('admin.joueurs.create');
    }
    // Enregistrer un joueur dans la base de données
    public function storeJoueur(Request $request)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'poste' => 'required|string|max:255',
            'numero' => 'required|integer',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Gestion de la photo
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        } else {
            $photoPath = null;
        }

        // Créer un nouveau joueur dans la base de données
        Joueur::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'date_naissance' => $request->date_naissance,
            'poste' => $request->poste,
            'numero' => $request->numero,
            'photo' => $photoPath,
        ]);

        return redirect()->route('admin.joueurs.index')->with('success', 'Joueur ajouté avec succès!');
    }

    public function indexJoueurs()
{
    $joueurs = Joueur::all(); // Récupère tous les joueurs
    return view('admin.joueurs.index', compact('joueurs'));
}

}
