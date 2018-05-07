<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    public function media()
    {
        return $this->belongsTo('App\Media');
    }
}
