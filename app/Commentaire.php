<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\commentaires;

class Commentaire extends Model
{
    protected $table = 'commentaires';
    protected $fillable = ['texte', 'user_id', 'recette_id'];

    public function Recette()
    {
    return $this->belongsTo('App\Recette');
    }

    public function Commentateur()
    {
    return $this->belongsTo('App\User', 'user_id');
    }

    public function SetUserId()
    {
         $this->user_id = 1; //utilisateur anonyme
    }

}
