<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{

    protected $fillable = ['nom_ingredient'];

    public function IngredientRecette()
    {
    return $this->hasMany('App\IngredientRecette');
    }


    public function IngredientInsecte()
    {
        return $this->hasOne('App\IngredientInsecte');
    }
}
