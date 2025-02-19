<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classement extends Model
{
    use HasFactory;

    protected $fillable = [
        'equipe_id',
        'points',
        'joues',
        'gagnes',
        'nuls',
        'perdus',
        'buts_marques',    // Assure-toi d'avoir ceci
        'buts_encaisses'   // Assure-toi d'avoir ceci
    ];

    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }
}
