@extends('layouts.app')

@section('content')
<style>
    .card-header.shadow-sm {
        box-shadow: 0 .125rem .25rem rgba(0, 0, 0, 0.075) !important;
    }
</style>
<div class="container">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="display-4">Tableau de Bord Administrateur</h1>
            <p class="lead">Gérez tous les aspects de votre équipe de football avec simplicité.</p>
        </div>
    </div>

    <!-- Barre de navigation -->
    <div class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <a class="navbar-brand" href="#">Dashboard</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href=""><i class="fas fa-users"></i> Joueurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""><i class="fas fa-futbol"></i> Matchs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""><i class="fas fa-building"></i> Stades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""><i class="fas fa-user-plus"></i> Créer un joueur</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Cartes d'actions -->
    <div class="row mb-4">
   

        <!-- Carte Matchs -->
        <div class="col-md-3">
            <div class="card text-black bg-success mb-3 shadow-lg">
                <div class="card-header shadow-sm"><i class="fas fa-users"></i> Équipes</div>
                <div class="card-body">
                    <h5 class="card-title">Gérer les équipes</h5>
                    <p class="card-text">Ajouter, modifier ou supprimer des équipes.</p>
                    <a href="" class="btn btn-light"><i class="fas fa-plus"></i> Ajouter</a>
                    <a href="" class="btn btn-info"><i class="fas fa-edit"></i> Modifier</a>
                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i> Supprimer</a>
                    <a href="" class="btn btn-secondary"><i class="fas fa-eye"></i> Voir tout</a>
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
                    <a href="" class="btn btn-light"><i class="fas fa-plus"></i> Ajouter</a>
                    <a href="" class="btn btn-info"><i class="fas fa-edit"></i> Modifier</a>
                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i> Supprimer</a>
                    <a href="" class="btn btn-secondary"><i class="fas fa-eye"></i> Voir tout</a>
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
                    <a href="" class="btn btn-info"><i class="fas fa-edit"></i> Modifier</a>
                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i> Supprimer</a>
                    <a href="" class="btn btn-secondary"><i class="fas fa-eye"></i> Voir tout</a>
                </div>
            </div>
        </div>

        <!-- Carte Joueurs -->
        <div class="col-md-3">
            <div class="card text-black bg-danger mb-3 shadow-lg">
                <div class="card-header shadow-sm"><i class="fas fa-user"></i> Joueurs</div>
                <div class="card-body">
                    <h5 class="card-title">Gérer les joueurs</h5>
                    <p class="card-text">Ajouter, modifier ou supprimer des joueurs.</p>
                    <a href="" class="btn btn-light"><i class="fas fa-plus"></i> Ajouter</a>
                    <a href="" class="btn btn-info"><i class="fas fa-edit"></i> Modifier</a>
                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i> Supprimer</a>
                    <a href="" class="btn btn-secondary"><i class="fas fa-eye"></i> Voir tout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Graphique des matchs -->
    <div class="row mb-4">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header shadow-sm">
                    <h5><i class="fas fa-chart-bar"></i> Statistiques des matchs</h5>
                </div>
                <div class="card-body">
                    <canvas id="matchStatsChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Dernières activités -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card shadow-lg">
                <div class="card-header shadow-sm">
                    <h5><i class="fas fa-list"></i> Dernières Activités</h5>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Matchs ajoutés récemment</li>
                        <li>Joueurs inscrits</li>
                        <li>Stades mis à jour</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Déconnexion -->
    <div class="row mt-5">
        <div class="col-12 text-center">
            <a href="{{ route('admin.logout') }}" class="btn btn-dark"><i class="fas fa-sign-out-alt"></i> Se déconnecter</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('matchStatsChart').getContext('2d');
    var matchStatsChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Match 1', 'Match 2', 'Match 3'],
            datasets: [{
                label: 'Matchs gagnés',
                data: [12, 19, 3],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

@endsection
