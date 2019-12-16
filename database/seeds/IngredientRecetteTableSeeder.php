<?php

use Illuminate\Database\Seeder;
use App\Recette;
Use App\Ingredient;

class IngredientRecetteTableSeeder extends Seeder
{

    /**
     * 
     *
     * @return void
     */
    public function run()
    {
        

     //DB::table('ingredient_recette')->delete();
    $recette = Recette::find(5);
    $recette->Ingredient()->attach(10, ['quantite' =>  4000 , 'unite_id' => 1]);
    $recette->Ingredient()->attach(6, ['quantite' =>  4 , 'unite_id' => 4]);

    $recette = Recette::find(1);
    $recette->Ingredient()->attach(16, ['quantite' =>  1 , 'unite_id' => 1]);
    $recette->Ingredient()->attach(14, ['quantite' =>  250 , 'unite_id' => 3]);
    $recette->Ingredient()->attach(15, ['quantite' => 100 , 'unite_id' => 3]);
    $recette->Ingredient()->attach(18, ['quantite' =>  1 , 'unite_id' => 1]);   
          
          
       
        
        
    }
}