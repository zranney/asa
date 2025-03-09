<?php

namespace App\Http\Controllers\Admin\Joueurs;

use App\Http\Controllers\Controller;
use App\Models\Joueur;
use Illuminate\Http\Request;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postesOrder = ['Gardien', 'Défenseur', 'Milieu', 'Attaquant'];

        // Trier d'abord par poste avec l'ordre personnalisé, puis par ID
        $joueurs = Joueur::orderByRaw("FIELD(poste, 'Gardien', 'Défenseur', 'Milieu', 'Attaquant')")
                         ->orderBy('id')
                         ->get();
        return view('admin.joueurs.index', compact('joueurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.joueurs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {$request->validate([
        'nom' => 'required|string|max:255',
        'email' => 'required|email|unique:joueurs',
        'age' => 'required|integer|min:10',
    ]);

    Joueur::create($request->all());

    return redirect()->route('joueurs.index')->with('success', 'Joueur ajouté avec succès');
//
    }

    /**
     * Display the specified resource.
     */
    public function show(Joueur $joueur)
    {
        return view('admin.joueurs.show', compact('joueur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Joueur $joueur)
    {
        return view('admin.joueurs.edit', compact('joueur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Joueur $joueur)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'poste' => 'required|string|max:255',
            'numero' => 'required|integer',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // si tu veux valider l'image
       ]);

        $joueur->update($request->all());

        return redirect()->route('joueurs.index')->with('success', 'Joueur mis à jour avec succès');
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Joueur $joueur)
    {
        $joueur->delete();

        return redirect()->route('joueurs.index')->with('success', 'Joueur supprimé avec succès');
  
    }
}
