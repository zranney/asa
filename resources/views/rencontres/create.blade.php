@extends('layouts.app')

@section('content')
    <h2>Ajouter un match</h2>
    <form action="{{ route('rencontres.store') }}" method="POST">
        @csrf
        <label for="equipe_1_id">Équipe 1 :</label>
        <select name="equipe_1_id" required>
            @foreach($equipes as $equipe)
                <option value="{{ $equipe->id }}">{{ $equipe->nom }}</option>
            @endforeach
        </select>

        <label for="score_equipe_1">Score Équipe 1 :</label>
        <input type="number" name="score_equipe_1" required>

        <label for="equipe_2_id">Équipe 2 :</label>
        <select name="equipe_2_id" required>
            @foreach($equipes as $equipe)
                <option value="{{ $equipe->id }}">{{ $equipe->nom }}</option>
            @endforeach
        </select>

        <label for="score_equipe_2">Score Équipe 2 :</label>
        <input type="number" name="score_equipe_2" required>

        <button type="submit">Enregistrer</button>
    </form>
@endsection
