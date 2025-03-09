@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="display-4">Ajouter une Équipe</h1>
            <p class="lead">Complétez les informations de l'équipe.</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Formulaire de création d'une équipe</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('equipes.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nom">Nom de l'Équipe</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control" id="ville" name="ville" required>
                </div>
                <div class="form-group">
                    <label for="stade">Stade</label>
                    <input type="text" class="form-control" id="stade" name="stade" required>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>
@endsection
