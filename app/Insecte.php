<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insecte extends Model
{
    protected $fillable = ['nom_insecte', 'nom_latin_insecte','ordre_insecte', 'description_insecte'];

    public function Ingredient()
    {
        return $this->hasMany('App\IngredientInsecte');
    }

    public function Image()
    {
        return $this->hasMany('App\Image');
    }

}
