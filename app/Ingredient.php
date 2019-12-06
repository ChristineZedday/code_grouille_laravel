<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{

<<<<<<< HEAD
    protected $fillable = ['id_insecte','nom_ingredient'];
=======
    protected $fillable = ['nom_ingredient', 'insecte_id'];
>>>>>>> d53aa620b4057fbb023ee7272e3025676a09c5fd

    public function IngredientRecette()
    {
    return $this->hasMany('App\IngredientRecette');
    }

    public function Insecte()
    {
    return $this->belongsTo('App\Insecte');
    }
}
