<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentaireRecette extends Model
{
    

    public function Recette() 
    {
    return $this->belongsTo('App\Recette');
    }

    public function User() 
    {
    return $this->belongsTo('App\User');
    }
    
   
}
