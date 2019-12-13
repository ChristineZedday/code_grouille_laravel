<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Orangehill\Iseed\IseedServiceProvider\infos;

class Info extends Model
{
    protected $fillable = ['titre', 'texte', 'email'];

 public function Image()
 {
     return $this->belongsToMany('App\Image');
 }
}

