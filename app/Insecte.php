<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insecte extends Model
{
    public function Ingredient() 
    {
        return $this->hasMany('App\Ingredient');
    }

    public function Image() 
    {
        return $this->hasMany('App\Image');
    }

}