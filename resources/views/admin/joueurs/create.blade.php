<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un joueur</title>

    <!-- Lien vers un fichier CSS de base pour le style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 30px;
        }

        h1 {
            color: #007bff;
            font-size: 2.5rem;
            font-weight: bold;
        }

        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-container label {
            font-weight: bold;
            margin-bottom: 8px;
            display: block;
        }

        .form-container input {
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .form-container button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            width: 100%;
            font-size: 1.2rem;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            font-size: 0.9rem;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group input[type="file"] {
            padding: 3px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="form-container">
            <h1>Ajouter un nouveau joueur</h1>

            <!-- Affichage des erreurs de validation -->
            @if ($errors->any())
                <div class="error-message">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Formulaire de création du joueur -->
            <form action="{{ route('joueurs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Champ Nom -->
                <div class="form-group">
                    <label for="nom">Nom:</label>
                    <input type="text" name="nom" id="nom" value="{{ old('nom') }}" required>
                </div>

                <!-- Champ Prénom -->
                <div class="form-group">
                    <label for="prenom">Prénom:</label>
                    <input type="text" name="prenom" id="prenom" value="{{ old('prenom') }}" required>
                </div>

                <!-- Champ Date de naissance -->
                <div class="form-group">
                    <label for="date_naissance">Date de naissance:</label>
                    <input type="date" name="date_naissance" id="date_naissance" value="{{ old('date_naissance') }}" required>
                </div>

                <!-- Champ Poste -->
                <div class="form-group">
                    <label for="poste">Poste:</label>
                    <input type="text" name="poste" id="poste" value="{{ old('poste') }}" required>
                </div>

                <!-- Champ Numéro -->
                <div class="form-group">
                    <label for="numero">Numéro:</label>
                    <input type="number" name="numero" id="numero" value="{{ old('numero') }}" required>
                </div>

                <!-- Champ Photo -->
                <div class="form-group">
                    <label for="photo">Photo:</label>
                    <input type="file" name="photo" id="photo">
                </div>

                <!-- Bouton de soumission -->
                <button type="submit">Enregistrer</button>
            </form>
        </div>
    </div>

    <!-- Script Bootstrap pour les interactions -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
