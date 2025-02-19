<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    protected $fillable = ['titre', 'contenu', 'date_publication', 'image'];

    protected $casts = [
        'date_publication' => 'datetime',
    ];
}