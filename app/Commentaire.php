<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\IseedServiceProvider\commentaires;

class Commentaire extends Model
{
    protected $fillable = ['texte'];

    public function Recette()
    {
    return $this->belongsTo('App\Recette');
    }

    public function User()
    {
    return $this->belongsTo('App\User');
    }


}
