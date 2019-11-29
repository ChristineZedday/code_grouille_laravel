<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model {

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function IngredientRecette()
    {
        return $this->hasMany('App\IngredientRecette');
    }

    public function CommentaireRecette()
    {
        return $this->hasMany('App\CommentaireRecette');
    }

}