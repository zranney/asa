<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des joueurs</title>
</head>
<body>
    <h1>Liste des joueurs</h1>

    <!-- Afficher les joueurs -->
    @if ($joueurs->isEmpty())
        <p>Aucun joueur trouvé.</p>
    @else
        <table border="1">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Poste</th>
                    <th>Numéro</th>
                    <th>Photo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($joueurs as $joueur)
                    <tr>
                        <td>{{ $joueur->nom }}</td>
                        <td>{{ $joueur->prenom }}</td>
                        <td>{{ $joueur->date_naissance }}</td>
                        <td>{{ $joueur->poste }}</td>
                        <td>{{ $joueur->numero }}</td>
                        <td>
                            @if ($joueur->photo)
                                <img src="{{ asset('storage/'. $joueur->photo) }}" alt="Photo du joueur">
                            @else
                                Aucune photo
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <br>
    <a href="{{ route('joueurs.create') }}">Ajouter un nouveau joueur</a>
</body>
</html>
