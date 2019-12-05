<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insecte extends Model
{
    protected $fillable = ['nom_insecte', 'nom_latin_insecte','ordre_insecte', 'description_insecte'];

    public function setInsecteIdAttribute($value) {
        $this->attributes['insecte_id'] = $value ?: null;
    }


    public function Ingredient()
    {
        return $this->hasMany('App\Ingredient');
    }

    public function Image()
    {
        return $this->hasMany('App\Image');
    }

}
