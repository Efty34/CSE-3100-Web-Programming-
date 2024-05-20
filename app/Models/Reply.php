<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $fillable = ['body', 'user_id', 'post_id'];

    /**
     * Get the user who authored the reply.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the post that this reply is associated with.
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
