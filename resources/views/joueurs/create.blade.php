<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un joueur</title>
</head>
<body>
    <h1>Ajouter un nouveau joueur</h1>

    <!-- Affichage des erreurs de validation -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('joueurs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" value="{{ old('nom') }}" required><br>

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" id="prenom" value="{{ old('prenom') }}" required><br>

        <label for="date_naissance">Date de naissance:</label>
        <input type="date" name="date_naissance" id="date_naissance" value="{{ old('date_naissance') }}" required><br>

        <label for="poste">Poste:</label>
        <input type="text" name="poste" id="poste" value="{{ old('poste') }}" required><br>

        <label for="numero">Numéro:</label>
        <input type="number" name="numero" id="numero" value="{{ old('numero') }}" required><br>

        <label for="photo">Photo:</label>
        <input type="file" name="photo" id="photo"><br>

        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>
