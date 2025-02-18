<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendrier_event extends Model
{
    protected $table = 'calendrier_events';
    use HasFactory;
    protected $fillable = ['titre', 'description', 'date', 'lieu'];
}
