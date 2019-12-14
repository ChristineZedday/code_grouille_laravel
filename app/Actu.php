<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\actus;

class Actu extends Model
{
    protected $fillable = [
        'titre_actu', 'resume_actu', 'texte_actu'
    ];

    public function Image()
    {
    return $this->belongstoMany('App\Image');
    }

    public function Commentaire()
    {
    return $this->hasMany('App\Commentaire');
    }
}
