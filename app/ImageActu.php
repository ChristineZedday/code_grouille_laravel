<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageActu extends Model
{
    public function Actu()
    {
        return $this->belongsTo('App\Actu');
    }
}
