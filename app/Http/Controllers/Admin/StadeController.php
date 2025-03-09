<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stade;
use Illuminate\Http\Request;

class StadeController extends Controller
{
    public function index()
    {
        $stades = Stade::all();
        return view('admin.stades.index', compact('stades'));
    }

    public function create()
    {
        return view('admin.stades.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'location' => 'required|string',
        ]);

        Stade::create($request->all());
        return redirect()->route('stades.index')->with('success', 'Stade ajouté avec succès');
    }

    public function edit(Stade $stade)
    {
        return view('admin.stades.edit', compact('stade'));
    }

    public function update(Request $request, Stade $stade)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'location' => 'required|string',
        ]);

        $stade->update($request->all());
        return redirect()->route('stades.index')->with('success', 'Stade modifié avec succès');
    }

    public function destroy(Stade $stade)
    {
        $stade->delete();
        return redirect()->route('stades.index')->with('success', 'Stade supprimé avec succès');
    }
}
