<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function IngredientRecette() 
    {
    return $this->hasMany('App\IngredientRecette');
    }

    public function Insecte() 
    {
    return $this->belongsTo('App\Insecte');
    }
}
