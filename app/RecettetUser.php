<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\recette_user;

class RecetteUser extends Model
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
