<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentaireActu extends Model
{
    public function User() 
    {
    return $this->belongsTo('App\User');
    }

    public function Actu() 
    {
    return $this->belongsTo('App\Actu');
    }
}
