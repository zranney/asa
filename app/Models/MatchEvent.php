<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchEvent extends Model
{
    use HasFactory;

    // Ajoutez les champs que vous souhaitez autoriser pour l'assignation de masse
    protected $fillable = [
        'domicile_id',
        'exterieur_id',
        'date',
        'heure',
        'lieu',
        'titre',
    ];

    public function domicile()
{
    return $this->belongsTo(Equipe::class, 'domicile_id');
}

public function exterieur()
{
    return $this->belongsTo(Equipe::class, 'exterieur_id');
}
}
