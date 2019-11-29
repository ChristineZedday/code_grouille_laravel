<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function Recette() 
    {
    return $this->belongsTo('App\Recette');
    }

    public function Actu() 
    {
    return $this->belongsTo('App\Actu');
    }

    public function Insecte() 
    {
    return $this->belongsTo('App\Insecte');
    }
}
