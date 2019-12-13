<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\RecetteUser;
use Orangehill\IseedServiceProvider\recettes;

class Recette extends Model {

    protected $fillable = ['titre_recette', 'description_recette','temps_preparation_recette', 'temps_cuisson_recette', 'difficulte_recette', 'appetence_recette', 'deroule_recette', 'portion_recette', 'user_id' ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Ingredient()
    {
        return $this->belongsToMany('App\Ingredient');
    }

    public function Commentaire()
    {
        return $this->hasMany('App\Commentaire');
    }

    public function Image()
    {
        return $this->belongsToMany('App\Image');
    }

    public function SetUserId()
    {
         $this->user_id = 1; //utilisateur anonyme
    }

    public function bookmarks(){

    return $this->belongsToMany('App\Recette');

    }

    public function is_bookmarked(User $user){

    return $this->bookmarks->contains($user);

    }

}
