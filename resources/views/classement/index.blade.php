@extends('layouts.app')

@section('content')
    <h2>Classement</h2>
    <table>
        <thead>
            <tr>
                <th>Équipe</th>
                <th>Points</th>
                <th>Matchs Joués</th>
                <th>Victoires</th>
                <th>Nuls</th>
                <th>Défaites</th>
                <th>Buts Marqués</th>
                <th>Buts Encaissés</th>
                <th>Goal Différentiel</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classements as $classement)
                <tr>
                    <td>{{ $classement['nom'] }}</td>
                    <td>{{ $classement['points'] }}</td>
                    <td>{{ $classement['joues'] }}</td>
                    <td>{{ $classement['gagnes'] }}</td>
                    <td>{{ $classement['nuls'] }}</td>
                    <td>{{ $classement['perdus'] }}</td>
                    <td>{{ $classement['buts_marques'] }}</td>
                    <td>{{ $classement['buts_encaisses'] }}</td>
                    <td>{{ $classement['goal_differentiel'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
