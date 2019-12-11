<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageRecette extends Model
{
    public function Recette()
    {
        return $this->belongsTo('App\Recette');
    }
}
