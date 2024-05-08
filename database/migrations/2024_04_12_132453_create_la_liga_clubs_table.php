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
        Schema::create('la_liga_clubs', function (Blueprint $table) {
            $table->id();
            $table->string('club_name');
            $table->string('logo')->nullable();
            $table->string('founded_year');
            $table->string('country');
            $table->string('social');
            $table->string('league');
            $table->string('world_ranking');
            $table->string('market_value');
            $table->integer('champions_league');
            $table->integer('league_trophy');
            $table->string('stadium_name');
            $table->integer('capacity');
            $table->string('stadium_picture')->nullable();
            $table->string('manager');

            for ($i = 1; $i <= 11; $i++) {
                $table->string('name' . $i);
                $table->string('position' . $i);
            }
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('la_liga_clubs');
    }
};
