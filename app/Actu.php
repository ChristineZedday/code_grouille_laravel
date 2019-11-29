<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actu extends Model
{
    public function Image() 
    {
    return $this->hasMany('App\Image');
    }

    public function Commentaire() 
    {
    return $this->hasMany('App\Commentaire');
    }
}
