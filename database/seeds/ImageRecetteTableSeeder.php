<?php

use Illuminate\Database\Seeder;
use App\Recette;
Use App\Image;

class ImageRecetteTableSeeder extends Seeder
{

    /**
     *
     *
     * @return void
     */
    public function run()
    {
    $recette = Recette::find(5);
    $recette->Image()->attach(19);
    $recette->Image()->attach(18); 

    }
}