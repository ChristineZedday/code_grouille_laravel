<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = ['titre', 'texte', 'email'];
}

// public function Image()
// {
//     return $this->hasMany('App\ImageInfo');
// }
