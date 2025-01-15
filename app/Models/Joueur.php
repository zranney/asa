<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;

    // Spécifier la table si le nom ne suit pas la convention plurielle
    protected $table = 'joueurs';

    // Attributs qui peuvent être remplis massivement
    protected $fillable = ['nom', 'prenom', 'date_naissance', 'poste', 'numero', 'photo'];
}

