@extends('layouts.app')

@section('content')
    <h2>Liste des rencontres</h2>
    <table>
        <thead>
            <tr>
                <th>Équipe 1</th>
                <th>Score</th>
                <th>Équipe 2</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rencontres as $rencontre)
                <tr>
                    <td>{{ $rencontre->equipe1->nom }}</td>
                    <td>{{ $rencontre->score_equipe_1 }} - {{ $rencontre->score_equipe_2 }}</td>
                    <td>{{ $rencontre->equipe2->nom }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
