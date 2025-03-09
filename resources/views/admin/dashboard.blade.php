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
</style>

<div class="container">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="display-4">Tableau de Bord Administrateur</h1>
            <p class="lead">Gérez tous les aspects de votre équipe de football avec simplicité.</p>
        </div>
    </div>

    <!-- Cartes d'actions -->
    <div class="row mb-4">
        <!-- Carte Joueurs -->
        <div class="col-md-3">
            <div class="card text-black bg-danger mb-3 shadow-lg">
                <div class="card-header shadow-sm"><i class="fas fa-user"></i> Joueurs</div>
                <div class="card-body">
                    <h5 class="card-title">Gérer les joueurs</h5>
                    <p class="card-text">Ajouter, modifier ou supprimer des joueurs.</p>
                    <a href="{{ route('joueurs.create') }}" class="btn btn-light"><i class="fas fa-plus"></i> Ajouter</a>
                    <a href="{{ route('joueurs.index') }}" class="btn btn-secondary"><i class="fas fa-eye"></i> Voir tout</a>
                </div>
            </div>
        </div>

        <!-- Carte Matchs -->
        <div class="col-md-3">
            <div class="card text-black bg-success mb-3 shadow-lg">
                <div class="card-header shadow-sm"><i class="fas fa-futbol"></i> Matchs</div>
                <div class="card-body">
                    <h5 class="card-title">Gérer les matchs</h5>
                    <p class="card-text">Créer et suivre les matchs.</p>
                    <a href="{{ route('equipes.index') }}" class="btn btn-light"><i class="fas fa-plus"></i> Ajouter</a>
                    <a href="{{ route('equipes.index') }}" class="btn btn-secondary"><i class="fas fa-eye"></i> Voir tout</a>
                </div>
            </div>
        </div>

        <!-- Carte Stades -->
        <div class="col-md-3">
            <div class="card text-black bg-warning mb-3 shadow-lg">
                <div class="card-header shadow-sm"><i class="fas fa-building"></i> Stades</div>
                <div class="card-body">
                    <h5 class="card-title">Gérer les stades</h5>
                    <p class="card-text">Ajouter et gérer les stades.</p>
                    <a href="" class="btn btn-light"><i class="fas fa-plus"></i> Ajouter</a>
                    <a href="" class="btn btn-secondary"><i class="fas fa-eye"></i> Voir tout</a>
                </div>
            </div>
        </div>

        <!-- Carte Equipes -->
        <div class="col-md-3">
            <div class="card text-black bg-primary mb-3 shadow-lg">
                <div class="card-header shadow-sm"><i class="fas fa-users"></i> Équipes</div>
                <div class="card-body">
                    <h5 class="card-title">Gérer les équipes</h5>
                    <p class="card-text">Ajouter, modifier ou supprimer des équipes.</p>
                    <a href="{{ route('equipes.create') }}" class="btn btn-light"><i class="fas fa-plus"></i> Ajouter</a>
                    <a href="{{ route('equipes.index') }}" class="btn btn-secondary"><i class="fas fa-eye"></i> Voir tout</a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
