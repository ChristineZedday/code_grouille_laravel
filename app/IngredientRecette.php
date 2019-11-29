<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngredientRecette extends Model
{
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
