<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mood extends Model
{
    /**
     * Get the comments for the blog post.
     */
    public function media()
    {
        return $this->hasMany('App\Media');
    }
}
