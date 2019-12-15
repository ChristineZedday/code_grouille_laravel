<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\RecetteUser;
use App\RecetteIngredient;
use App\Commentaire;
use Orangehill\IseedServiceProvider\recettes;

class Recette extends Model {

    protected $fillable = ['titre_recette', 'description_recette','temps_preparation_recette', 'temps_cuisson_recette', 'difficulte_recette', 'appetence_recette', 'deroule_recette', 'portion_recette', 'user_id' ];

    public function Auteur()
    {
        return $this->BelongsTo('App\User', 'user_id'); //n'a qu'un auteur
    }

    public function Ingredient()
    {
        return $this->belongsToMany('App\Ingredient')->withPivot('quantite', 'unite_id');
    }

    public function Commentateur() //les commentateurs en passant par les commentaires!
    {
        return $this->hasManyThrough('App\User', 'App\Commentaire');
    }

    public function Commentaire() //qd je veux les commentaires, c'est pas pivot, sinon j'ai les users
    {
        return $this->HasMany('App\Commentaire');
        
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
