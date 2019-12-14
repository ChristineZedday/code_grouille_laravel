<?php

use Illuminate\Database\Seeder;

class IngredientRecetteTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ingredient_recette')->delete();
        
        \DB::table('ingredient_recette')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 4000,
                'unite_id' => 1,
                'ingredient_id' => 10,
                'recette_id' => 5,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 4,
                'unite_id' => 4,
                'ingredient_id' => 6,
                'recette_id' => 5,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 1,
                'unite_id' => 1,
                'ingredient_id' => 16,
                'recette_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 250,
                'unite_id' => 3,
                'ingredient_id' => 14,
                'recette_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 1,
                'unite_id' => 1,
                'ingredient_id' => 15,
                'recette_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 1,
                'unite_id' => 1,
                'ingredient_id' => 18,
                'recette_id' => 1,
            ),
        ));
        
        
    }
}