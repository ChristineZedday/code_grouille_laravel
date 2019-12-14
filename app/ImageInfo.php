<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\image_info;

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
