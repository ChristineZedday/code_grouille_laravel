<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngredientInsecte extends Model
{
    public function Insecte()
    {
        return $this->belongsTo('App\Insecte');
    }

    public function Ingredient()
    {
        return $this->belongsTo('App\Ingredient');
    }
}
