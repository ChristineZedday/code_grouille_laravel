<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqQuestion extends Model
{
    public function User() 
    {
        return $this->belongsTo('App\User');
    }
    public function FaqReponse() 
    {
        return $this->hasMany('App\FaqReponse');
    }
}
