<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model {

    protected $fillable = ['titre_recette', 'description_recette','temps_preparation_recette', 'temps_cuisson_recette', 'difficulte_recette', 'appetence_recette', 'deroule_recette', 'portion_recette' ];

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

    public function SetUserId()
    {
         $this->user_id = 1; //utilisateur anonyme
    }

}
