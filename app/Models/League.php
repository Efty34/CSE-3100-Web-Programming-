<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'league_logo'];

    public function clubs()
    {
        return $this->hasMany(Club::class); // One-to-many relationship
    }
}
