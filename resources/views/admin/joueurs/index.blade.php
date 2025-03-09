@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(to right, #6a11cb, #2575fc);
        color: #fff;
        font-family: Arial, sans-serif;
    }

    .card {
        border-radius: 10px;
        margin-bottom: 30px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #f8f9fa;
        color: #333;
        font-weight: bold;
    }

    .card-body {
        background-color: #fff;
        color: #333;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-header .fas {
        margin-right: 10px;
    }

    .navbar {
        background-color: #343a40;
    }

    .navbar-nav .nav-link {
        color: #fff;
    }

    .navbar-nav .nav-link:hover {
        color: #f8f9fa;
    }

    .btn {
        border-radius: 5px;
    }

    .card-body a {
        margin-right: 5px;
    }

    .card-footer {
        background-color: #f8f9fa;
        border-top: 1px solid #ddd;
    }

    .container {
        margin-top: 50px;
    }

    .nav-tabs .nav-item .nav-link {
        border: 1px solid #ddd;
    }

    .nav-tabs .nav-item .nav-link.active {
        background-color: #6a11cb;
        color: #fff;
    }
    
    /* Modale de confirmation */
    .modal {
        display: none;
        position: fixed;
        z-index: 1050;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        justify-content: center;
        align-items: center;
    }
    .modal-content {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        width: 350px;
        text-align: center;
        transform: scale(0.8);
        opacity: 0;
        transition: all 0.3s ease-in-out;
    }
    .modal-content.show {
        transform: scale(1);
        opacity: 1;
    }
    .modal-header {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .modal-body {
        font-size: 16px;
        color: #333;
        margin-bottom: 20px;
    }
    .modal-footer {
        display: flex;
        justify-content: space-between;
    }
    .btn-cancel {
        background: #ccc;
        color: #333;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .btn-delete {
        background: #e74c3c;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .btn-delete:hover {
        background: #c0392b;
    }
</style>

<div class="container">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="display-4">Gestion des Joueurs</h1>
            <p class="lead">Voir, modifier, supprimer ou ajouter des joueurs dans l'équipe.</p>
        </div>
    </div>

    <!-- Onglets de navigation -->
    <ul class="nav nav-tabs mb-4">
        <li class="nav-item">
            <a class="nav-link active" id="joueurs-tab" data-bs-toggle="tab" href="#joueurs">Joueurs</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="equipes-tab" data-bs-toggle="tab" href="#equipes">Équipes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="matchs-tab" data-bs-toggle="tab" href="#matchs">Matchs</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="stades-tab" data-bs-toggle="tab" href="#stades">Stades</a>
        </li>
    </ul>

    <div class="tab-content">
        <!-- Onglet Joueurs -->
        <div class="tab-pane fade show active" id="joueurs">
            <!-- Filtre et Tri -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <input type="text" class="form-control" id="searchJoueurs" placeholder="Rechercher un joueur...">
                </div>
                <div class="col-md-4">
                    <select class="form-select" id="posteFilter">
                        <option value="">Filtrer par poste</option>
                        <option value="Gardien">Gardien</option>
                        <option value="Défenseur">Défenseur</option>
                        <option value="Milieu">Milieu</option>
                        <option value="Attaquant">Attaquant</option>
                    </select>
                </div>
            </div>

            <!-- Liste des Joueurs -->
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Liste des joueurs</h4>
                    <a href="{{ route('joueurs.create') }}" class="btn btn-success btn-sm">
                        <i class="fas fa-plus"></i> Ajouter un joueur
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="joueursTable">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Poste</th>
                                <th>Numéro</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($joueurs as $joueur)
                                <tr>
                                    <td>{{ $joueur->nom }}</td>
                                    <td>{{ $joueur->prenom }}</td>
                                    <td>{{ $joueur->poste }}</td>
                                    <td>{{ $joueur->numero }}</td>
                                    <td>
                                        <a href="{{ route('joueurs.edit', $joueur->id) }}" class="btn btn-info btn-sm">
                                            <i class="fas fa-edit"></i> Modifier
                                        </a>
                                        <!-- On empêche la soumission directe en interceptant l'onsubmit -->                                        
                                        <form action="{{ route('joueurs.destroy', $joueur->id) }}" method="POST" style="display:inline;" onsubmit="return openConfirmationModal(event, {{ $joueur->id }})">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Supprimer
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Onglet Équipes -->
        <div class="tab-pane fade" id="equipes">
            <h4>Équipes à venir...</h4>
        </div>

        <!-- Onglet Matchs -->
        <div class="tab-pane fade" id="matchs">
            <h4>Matchs à venir...</h4>
        </div>

        <!-- Onglet Stades -->
        <div class="tab-pane fade" id="stades">
            <h4>Stades à venir...</h4>
        </div>
    </div>
</div>

<!-- Modale de confirmation personnalisée -->
<div id="confirmationModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">Confirmation</div>
        <div class="modal-body">Êtes-vous sûr de vouloir supprimer ce joueur ?</div>
        <div class="modal-footer">
            <button class="btn btn-secondary btn-cancel" onclick="closeConfirmationModal()">Annuler</button>
            <button class="btn btn-danger btn-delete" id="confirmDeleteBtn">Confirmer la suppression</button>
        </div>
    </div>
</div>

<script>
    let deleteFormReference = null;

    // Ouvre la modale de confirmation et empêche la soumission immédiate
    function openConfirmationModal(event, joueurId) {
        event.preventDefault();
        // Stocke une référence au formulaire qui doit être soumis après confirmation
        deleteFormReference = event.target.closest('form');
        const modal = document.getElementById('confirmationModal');
        modal.style.display = 'flex';
        // Lancer l'animation d'apparition
        setTimeout(() => {
            modal.querySelector('.modal-content').classList.add('show');
        }, 50);
        return false;
    }

    // Ferme la modale de confirmation
    function closeConfirmationModal() {
        const modal = document.getElementById('confirmationModal');
        modal.querySelector('.modal-content').classList.remove('show');
        setTimeout(() => {
            modal.style.display = 'none';
        }, 300);
    }

    // Si l'utilisateur confirme, soumet le formulaire
    document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
        if (deleteFormReference) {
            deleteFormReference.submit();
        }
    });

    // Scripts pour filtrer les joueurs par poste et rechercher
    document.getElementById('posteFilter').addEventListener('change', function() {
        const filter = this.value.toLowerCase();
        const rows = document.querySelectorAll('#joueursTable tbody tr');
        rows.forEach(row => {
            const poste = row.cells[2].textContent.toLowerCase();
            row.style.display = filter === '' || poste.includes(filter) ? '' : 'none';
        });
    });

    document.getElementById('searchJoueurs').addEventListener('input', function() {
        const query = this.value.toLowerCase();
        const rows = document.querySelectorAll('#joueursTable tbody tr');
        rows.forEach(row => {
            const name = row.cells[0].textContent.toLowerCase();
            const prenom = row.cells[1].textContent.toLowerCase();
            row.style.display = name.includes(query) || prenom.includes(query) ? '' : 'none';
        });
    });
</script>
@endsection
