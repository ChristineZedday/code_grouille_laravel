<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\insectes;

class Insecte extends Model
{
    protected $fillable = ['nom_insecte', 'nom_latin_insecte','ordre_insecte', 'description_insecte'];

    public function Ingredient()
    {
        return $this->hasMany('App\Ingredient');
    }

    public function Image()
    {
        return $this->belongsToMany('App\Image');
    }

}
