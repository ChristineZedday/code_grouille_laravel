<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{

    protected $fillable = ['nom_ingredient'];

    public function Recette()
    {
    return $this->hasMany('App\IngredientRecette');
    }


    public function Insecte()
    {
        return $this->hasOne('App\IngredientInsecte');
    }
}
