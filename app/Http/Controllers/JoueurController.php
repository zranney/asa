<?php

namespace App\Http\Controllers;

use App\Models\Joueur;
use Illuminate\Http\Request;

class JoueurController extends Controller
{

    public function index(){
        $joueurs=Joueur::all();
        return view('joueurs.index', compact('joueurs'));
    }

    // Afficher le formulaire pour ajouter un joueur
    public function create()
    {
        return view('joueurs.create');
    }

    // Enregistrer un joueur dans la base de données
    public function store(Request $request)
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

        return redirect()->route('joueurs.index')->with('success', 'Joueur ajouté avec succès!');
    }

    public static  function getPosteIcon($poste)
{
    $icons = [
        'Gardiens' => 'fas fa-hand-paper', // 🧤 Gants pour gardien
        'Défenseurs' => 'fas fa-shield-alt', // 🛡️ Bouclier pour défense
        'Milieux' => 'fas fa-futbol', // ⚽ Ballon pour milieu
        'Attaquants' => 'fas fa-bullseye', // 🎯 Cible pour attaquant
    ];

    return $icons[$poste] ?? 'fas fa-user'; // Icône par défaut
}




    public function equipe() {
        $joueurs = Joueur::all();
    
        $categories = [
            'Gardiens' => $joueurs->where('poste', 'Gardien'),
            'Défenseurs' => $joueurs->where('poste', 'Défenseur'),
            'Milieux' => $joueurs->where('poste', 'Milieu'),
            'Attaquants' => $joueurs->where('poste', 'Attaquant'),
            'Staff' => $joueurs->where('poste', 'Staff'),
        ];
    
        return view('equipe', compact('categories'));
    }
    
}

