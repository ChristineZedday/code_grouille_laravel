<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqReponse extends Model
{
    public function User() 
    {
    return $this->belongsTo('App\User');
    }

    public function FaqQuestion() 
    {
    return $this->belongsTo('App\FaqQuestion');
    }
}
