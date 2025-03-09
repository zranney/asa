<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function index()
    {
        $equipes = Equipe::all();
        return view('admin.equipes.index', compact('equipes'));
    }

    public function create()
    {
        return view('admin.equipes.create');
    }

    public function store(Request $request)
{
    // Validation des données du formulaire
    $request->validate([
        'nom' => 'required|string|max:255',
        'ville' => 'required|string|max:255',
        'stade' => 'required|string|max:255',
    ]);

    // Création de l'équipe dans la base de données
    \App\Models\Equipe::create([
        'nom' => $request->nom,
        'ville' => $request->ville,
        'stade' => $request->stade,
    ]);

    // Redirection vers l'index avec un message de succès
    return redirect()->route('equipes.index')->with('success', 'Équipe ajoutée avec succès');
}

    public function edit(Equipe $equipe)
    {
        return view('admin.equipes.edit', compact('equipe'));
    }

    public function update(Request $request, $id)
{
    // Valider la requête
    $request->validate([
        'nom' => 'required|string|max:255',
    ]);

    // Trouver l'équipe à modifier
    $equipe = Equipe::findOrFail($id);

    // Mettre à jour le nom de l'équipe
    $equipe->update([
        'nom' => $request->nom,
    ]);

    // Rediriger vers la liste des équipes avec un message de succès
    return redirect()->route('equipes.index')->with('success', 'Équipe modifiée avec succès.');
}

    public function destroy(Equipe $equipe)
    {
        $equipe->delete();
        return redirect()->route('equipes.index')->with('success', 'Équipe supprimée avec succès');
    }
}
