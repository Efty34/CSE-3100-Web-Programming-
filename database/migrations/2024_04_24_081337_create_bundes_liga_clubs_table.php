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
        Schema::create('bundes_liga_clubs', function (Blueprint $table) {
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

            $table->string('name1');
            $table->string('position1');

            $table->string('name2');
            $table->string('position2');
            
            $table->string('name3');
            $table->string('position3');
           
            $table->string('name4');
            $table->string('position4');
           
            $table->string('name5');
            $table->string('position5');
            
            $table->string('name6');
            $table->string('position6');
            
            $table->string('name7');
            $table->string('position7');
            
            $table->string('name8');
            $table->string('position8');
           
            $table->string('name9');
            $table->string('position9');
            
            $table->string('name10');
            $table->string('position10');
            
            $table->string('name11');
            $table->string('position11');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bundes_liga_clubs');
    }
};
