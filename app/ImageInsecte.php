<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageInsecte extends Model
{
    public function Insecte()
    {
        return $this->belongsTo('App\Insecte');
    }
}
