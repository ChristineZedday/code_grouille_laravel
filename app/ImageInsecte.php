<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\image_insecte;

class ImageInsecte extends Model
{
    public function Insecte()
    {
        return $this->belongsTo('App\Insecte');
    }

    public function Image()
    {
        return $this->belongsTo('App\Image');
    }
}
