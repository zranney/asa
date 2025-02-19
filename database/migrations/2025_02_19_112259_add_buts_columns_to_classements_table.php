<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddButsColumnsToClassementsTable extends Migration
{
    public function up()
    {
        Schema::table('classements', function (Blueprint $table) {
            $table->integer('buts_marques')->default(0);
            $table->integer('buts_encaisses')->default(0);
        });
    }

    public function down()
    {
        Schema::table('classements', function (Blueprint $table) {
            $table->dropColumn('buts_marques');
            $table->dropColumn('buts_encaisses');
        });
    }
}