<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unite extends Model
{

    public function Ingredient() 
    {
        return $this->belongsToMany('App\Ingredient');
    }

    public function Ingunit()
    {

        return $this->hasManyThrough('App\Ingredient', 'App\IngredientRecette');
    }
   
}
