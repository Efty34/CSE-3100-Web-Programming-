<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPlayer extends Model
{
    use HasFactory;

    protected $table = 'user_players';

    // Specify which model attributes you can assign via mass assignment
    protected $fillable = [
        'user_id',
        'player_name',
        'player_position',
        'club_type'
    ];

    // Define the relationship back to the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
