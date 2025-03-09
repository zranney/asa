<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Match;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function index()
    {
        $matches = Match::all();
        return view('admin.matchs.index', compact('matches'));
    }

    public function create()
    {
        return view('admin.matchs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'equipe_1_id' => 'required|exists:equipes,id',
            'equipe_2_id' => 'required|exists:equipes,id',
        ]);

        Match::create($request->all());
        return redirect()->route('matchs.index')->with('success', 'Match ajouté avec succès');
    }

    public function edit(Match $match)
    {
        return view('admin.matchs.edit', compact('match'));
    }

    public function update(Request $request, Match $match)
    {
        $request->validate([
            'date' => 'required|date',
            'equipe_1_id' => 'required|exists:equipes,id',
            'equipe_2_id' => 'required|exists:equipes,id',
        ]);

        $match->update($request->all());
        return redirect()->route('matchs.index')->with('success', 'Match modifié avec succès');
    }

    public function destroy(Match $match)
    {
        $match->delete();
        return redirect()->route('matchs.index')->with('success', 'Match supprimé avec succès');
    }
}
