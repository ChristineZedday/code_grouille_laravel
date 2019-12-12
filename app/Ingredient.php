<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{

    protected $fillable = ['nom_ingredient'];

    public function Recette()
    {
    return $this->belongsToMany('App\Recette');
    }


    public function Insecte()
    {
        return $this->belongsToMany('App\Insecte');
    }
}
