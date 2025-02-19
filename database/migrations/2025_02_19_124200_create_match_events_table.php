<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('match_events', function (Blueprint $table) {
            $table->id();
        $table->foreignId('domicile_id')->constrained('equipes'); // Équipe à domicile
        $table->foreignId('exterieur_id')->constrained('equipes'); // Équipe à l'extérieur
        $table->date('date'); // Date du match
        $table->string('lieu'); // Lieu du match
        $table->time('heure'); // Heure du match
        $table->time('titre'); // Titre du match
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('match_events');
    }
};
