<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\image_recette;

class ImageRecette extends Model
{
    public function Recette()
    {
        return $this->belongsTo('App\Recette');
    }

    public function Image()
    {
        return $this->belongsTo('App\Image');
    }
}
