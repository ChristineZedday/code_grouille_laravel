<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageInfo extends Model
{
    public function Info()
    {
        return $this->belongsTo('App\Info');
    }

    public function Image()
    {
        return $this->belongsTo('App\Image');
    }
}
