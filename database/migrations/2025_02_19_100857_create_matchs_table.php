<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('rencontres', function (Blueprint $table) {
        $table->id();
        $table->foreignId('equipe_1_id')->constrained('equipes');
        $table->foreignId('equipe_2_id')->constrained('equipes');
        $table->integer('score_equipe_1');
        $table->integer('score_equipe_2');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matchs');
    }
};
