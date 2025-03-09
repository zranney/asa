@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="display-4">Modifier l'Équipe</h1>
            <p class="lead">Modifiez les informations de l'équipe.</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4>Formulaire de modification d'une équipe</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('equipes.update', $equipe->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom de l'équipe</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="{{ $equipe->nom }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Modifier l'équipe</button>
            </form>
        </div>
    </div>
</div>
@endsection
