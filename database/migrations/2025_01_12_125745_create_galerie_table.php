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
        Schema::create('galerie', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['photo', 'video']);
            $table->string('url');
            $table->string('titre', 150);
            $table->datetime('date_upload');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galerie');
    }
};
