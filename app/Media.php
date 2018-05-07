<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
     /**
     * Get the post that owns the comment.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function moods()
    {
        return $this->belongsTo('App\Mood');
    }
    
    public function comments()
    {
        return $this->hasOne('App\Comment');
    }
}
