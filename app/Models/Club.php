<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable =
    [

        'club_name',
        'logo',
        'founded_year',
        'country',
        'social',
        'league',
        'world_ranking',
        'market_value',
        'champions_league',
        'league_trophy',
        'stadium_name',
        'capacity',
        'stadium_picture',
        'manager',
        
        'player1',
        'position1',
        'player2',
        'position2',
        'player3',
        'position3',
        'player4',
        'position4',
        'player5',
        'position5',
        'player6',
        'position6',
        'player7',
        'position7',
        'player8',
        'position8',
        'player9',
        'position9',
        'player10',
        'position10',
        'player11',
        'position11',

        'league_id'

    ];

    public function league()
    {
        return $this->belongsTo(League::class); // Inverse relationship
    }
}
