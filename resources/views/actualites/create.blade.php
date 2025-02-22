@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Créer une Actualité</h2>
    <form action="{{ route('actualites.store') }}" method="POST">
        @csrf
        
        <!-- Titre -->
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" id="titre" value="{{ old('titre') }}" required>
            @error('titre')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <!-- Contenu -->
        <div class="mb-3">
            <label for="contenu" class="form-label">Contenu</label>
            <textarea name="contenu" class="form-control" id="contenu" rows="4" required>{{ old('contenu') }}</textarea>
            @error('contenu')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <!-- Date de publication -->
        <div class="mb-3">
            <label for="date_publication" class="form-label">Date de publication</label>
            <input type="date" name="date_publication" class="form-control" id="date_publication" value="{{ old('date_publication') }}" required>
            @error('date_publication')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
@endsection
