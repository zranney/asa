{{-- resources/views/admin/joueurs/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-4">Ajouter un Joueur</h1>
    <form action="{{ route('joueurs.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700">Nom</label>
            <input type="text" name="nom" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Âge</label>
            <input type="number" name="age" class="w-full p-2 border rounded" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Ajouter</button>
    </form>
</div>
@endsection
