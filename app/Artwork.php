<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    protected $table = 'artwork';

    public function user()
    {
       return $this->hasOne('App\User', 'id', 'user_id');
    }
}
