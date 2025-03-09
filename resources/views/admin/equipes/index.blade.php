@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(to right, #5993e9, #3558f8); /* Nouveau dégradé bleu-vert */
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
        font-size: 22px;
        font-weight: bold;
        color: #e74c3c;
        margin-bottom: 15px;
    }
    .modal-body {
        font-size: 18px;
        color: #333;
        font-weight: bold;
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
        flex: 1;
        margin-right: 10px;
    }
    .btn-delete {
        background: #e74c3c;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        flex: 1;
    }
    .btn-delete:hover {
        background: #c0392b;
    }
</style>

@if(session('success') || session('error'))
    <div class="alert-container position-fixed top-0 end-0 p-3" style="z-index: 1050;">
        <div class="alert {{ session('success') ? 'alert-success' : (session('error') ? 'alert-danger' : '') }} alert-dismissible fade show shadow" role="alert" style="min-width: 300px; 
            {{ session('success') && session('success') === 'Suppression réussie' ? 'background-color: green;' : '' }}">
            <strong>{{ session('success') ?? session('error') }}</strong>
            <div class="progress mt-2">
                <div class="progress-bar progress-bar-striped progress-bar-animated" 
                     role="progressbar" 
                     style="width: 100%; height: 4px;"></div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let alertBox = document.querySelector(".alert");
            let progressBar = document.querySelector(".progress-bar");

            if (alertBox) {
                let duration = 8000; // Temps avant disparition (en ms)
                let startTime = Date.now();

                let interval = setInterval(() => {
                    let elapsed = Date.now() - startTime;
                    let percent = 100 - (elapsed / duration) * 100;
                    progressBar.style.width = percent + "%";

                    if (elapsed >= duration) {
                        clearInterval(interval);
                        alertBox.classList.remove("show");
                        setTimeout(() => alertBox.remove(), 500);
                    }
                }, 50);
            }
        });
    </script>
@endif

<div class="container">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="display-4">Gestion des Équipes</h1>
            <p class="lead">Voir, modifier, supprimer ou ajouter des équipes.</p>
        </div>
    </div>

    <!-- Onglets de navigation -->
    <ul class="nav nav-tabs mb-4">
        <li class="nav-item">
            <a class="nav-link" id="joueurs-tab" data-bs-toggle="tab" href="#joueurs">Joueurs</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" id="equipes-tab" data-bs-toggle="tab" href="#equipes">Équipes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="matchs-tab" data-bs-toggle="tab" href="#matchs">Matchs</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="stades-tab" data-bs-toggle="tab" href="#stades">Stades</a>
        </li>
    </ul>

    <div class="tab-content">
        <!-- Onglet Équipes -->
        <div class="tab-pane fade show active" id="equipes">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Liste des équipes</h4>
                    <a href="{{ route('equipes.create') }}" class="btn btn-success btn-sm">
                        <i class="fas fa-plus"></i> Ajouter une équipe
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nom de l'Équipe</th>
                                <th>Ville</th>
                                <th>Stade</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($equipes as $equipe)
                                <tr>
                                    <td>{{ $equipe->nom }}</td>
                                    <td>{{ $equipe->ville }}</td>
                                    <td>{{ $equipe->stade }}</td>
                                    <td>
                                        <a href="{{ route('equipes.edit', $equipe->id) }}" class="btn btn-info btn-sm">
                                            <i class="fas fa-edit"></i> Modifier
                                        </a>
                                        <form action="{{ route('equipes.destroy', $equipe->id) }}" method="POST" style="display:inline;" onsubmit="return openConfirmationModal(event, {{ $equipe->id }})">
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
    </div>
</div>

<!-- Modale de confirmation -->
<div id="confirmationModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">Confirmation</div>
        <div class="modal-body">Êtes-vous sûr de vouloir supprimer cette équipe ?</div>
        <div class="modal-footer">
            <button class="btn-cancel" onclick="closeConfirmationModal()">Annuler</button>
            <button class="btn-delete" id="confirmDeleteBtn">Confirmer</button>
        </div>
    </div>
</div>

<script>
    let deleteFormReference = null;

    function openConfirmationModal(event, equipeId) {
        event.preventDefault();
        deleteFormReference = event.target.closest('form');
        const modal = document.getElementById('confirmationModal');
        modal.style.display = 'flex';
        setTimeout(() => {
            modal.querySelector('.modal-content').classList.add('show');
        }, 50);
        return false;
    }

    function closeConfirmationModal() {
        const modal = document.getElementById('confirmationModal');
        modal.querySelector('.modal-content').classList.remove('show');
        setTimeout(() => {
            modal.style.display = 'none';
        }, 300);
    }

    document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
        if (deleteFormReference) {
            deleteFormReference.submit();
        }
    });
</script>
@endsection
