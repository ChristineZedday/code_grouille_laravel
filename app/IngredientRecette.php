<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\ingredient_recette;

class IngredientRecette extends Model //devrait étendre la classe pivot?
{
    protected $table = "ingredient_recette";

    public function Recette()
    {
        return $this->belongsTo('App\Recette');
    }

    public function Ingredient()
    {
        return $this->belongsTo('App\Ingredient');
    }

   
    public function Unite()
    {
        return $this->belongsTo('App\Unite');
    }
}
