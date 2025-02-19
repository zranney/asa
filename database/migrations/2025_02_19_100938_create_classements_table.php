<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassementsTable extends Migration
{
    public function up()
    {
        Schema::create('classements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipe_id')->constrained()->onDelete('cascade');
            $table->integer('points')->default(0);
            $table->integer('joues')->default(0);
            $table->integer('gagnes')->default(0);
            $table->integer('nuls')->default(0);
            $table->integer('perdus')->default(0);
            $table->integer('buts_marques')->default(0); // Ajoute cette ligne
            $table->integer('buts_encaisses')->default(0); // Ajoute cette ligne
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('classements');
    }
}
