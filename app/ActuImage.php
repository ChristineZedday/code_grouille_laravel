<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\image_actu;

class ActuImage extends Model
{
    

    public function Actu()
    {
        return $this->belongsTo('App\Actu');
    }

    public function Image()
    {
        return $this->belongsTo('App\Image');
    }
}
