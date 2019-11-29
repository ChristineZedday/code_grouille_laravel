<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unite extends Model
{

    public function IngredientRecette() 
    {
        return $this->hasMany('App\IngredientRecette');
    }

}
