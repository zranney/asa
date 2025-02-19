<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $fillable = ['nom']; // Ajoute d'autres champs si nécessaire

    public function classement()
    {
        return $this->hasOne(Classement::class, 'equipe_id');
    }
}
