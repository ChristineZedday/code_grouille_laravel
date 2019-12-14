<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\ingredients;

class Ingredient extends Model
{

    protected $fillable = ['nom_ingredient'];

    public function Recette()
    {
    return $this->BelongsToMany('App\Recette');
    }


    public function Insecte()
    {
        return $this->BelongsTo('App\Insecte');
    }

   


//     public function Unite()
//     {
//         return $this->hasManyThrough('App\Unite', 'App\IngredientRecette')->withPivot('unite_id');
        
//     }

}
