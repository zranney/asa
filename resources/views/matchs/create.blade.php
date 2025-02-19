@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un Match</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('matchs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="domicile_id">Équipe Domicile</label>
            <select name="domicile_id" id="domicile_id" class="form-control" required>
                @foreach ($equipes as $equipe)
                    <option value="{{ $equipe->id }}">{{ $equipe->nom }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="exterieur_id">Équipe Extérieur</label>
            <select name="exterieur_id" id="exterieur_id" class="form-control" required>
                @foreach ($equipes as $equipe)
                    <option value="{{ $equipe->id }}">{{ $equipe->nom }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="lieu">Titre</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="heure">Heure</label>
            <input type="time" name="heure" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="lieu">Lieu</label>
            <input type="text" name="lieu" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
@endsection
