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
        Schema::create('players', function (Blueprint $table) {
            $table->id();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('position');
            $table->string('profile_image')->nullable();
            $table->string('birth_date');
            $table->string('birth_place');
            $table->string('social');
            $table->string('preferred_foot');
            $table->string('height');
            $table->string('market_value');
            $table->string('outfitter');
            $table->integer('career_goals');
            $table->integer('world_cups');
            $table->integer('continental_cups');
            $table->integer('ballon_dors');
            $table->integer('champions_league');
            $table->integer('league_titles');
            $table->string('club_debut');
            $table->string('current_club');
            $table->string('previous_clubs');
            $table->string('national_team');
            $table->string('national_debut');
            $table->integer('overall');                        
            $table->integer('pace');                        
            $table->integer('shooting');                        
            $table->integer('passing'); 
            $table->integer('dribbling'); 
            $table->integer('defending'); 
            $table->integer('physical'); 
            $table->string('photo1')->nullable();                        
            $table->string('photo2')->nullable();                        
            $table->string('photo3')->nullable();                        
            $table->string('photo4')->nullable();                        
            $table->string('photo5')->nullable(); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
