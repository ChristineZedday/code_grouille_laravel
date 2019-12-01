<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favori extends Model
{
    public function User() 
    {
    return $this->belongsTo('App\User');
    }

    public function Recette() 
    {
    return $this->belongsTo('App\Recette');
    }
}
