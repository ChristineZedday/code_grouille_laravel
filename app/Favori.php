<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\favoris;

class Favori extends Model
{
    protected $table = 'favoris';
    
    public function User() 
    {
    return $this->belongsTo('App\User');
    }

    public function Recette() 
    {
    return $this->belongsTo('App\Recette');
    }
}
