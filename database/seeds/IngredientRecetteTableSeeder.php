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
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 4,
                'unite_id' => 1,
                'ingredient_id' => 14,
                'recette_id' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 50,
                'unite_id' => 3,
                'ingredient_id' => 8,
                'recette_id' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 4,
                'unite_id' => 1,
                'ingredient_id' => 14,
                'recette_id' => 10,
            ),
            5 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 20,
                'unite_id' => 3,
                'ingredient_id' => 8,
                'recette_id' => 10,
            ),
            6 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 1,
                'unite_id' => 1,
                'ingredient_id' => 15,
                'recette_id' => 10,
            ),
            7 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 4,
                'unite_id' => 1,
                'ingredient_id' => 16,
                'recette_id' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 4,
                'unite_id' => 1,
                'ingredient_id' => 16,
                'recette_id' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 1,
                'unite_id' => 1,
                'ingredient_id' => 17,
                'recette_id' => 1,
            ),
            10 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 50,
                'unite_id' => 3,
                'ingredient_id' => 18,
                'recette_id' => 1,
            ),
            11 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 200,
                'unite_id' => 3,
                'ingredient_id' => 19,
                'recette_id' => 1,
            ),
            12 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 1,
                'unite_id' => 1,
                'ingredient_id' => 20,
                'recette_id' => 1,
            ),
            13 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 1,
                'unite_id' => 1,
                'ingredient_id' => 21,
                'recette_id' => 1,
            ),
            14 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 1,
                'unite_id' => 1,
                'ingredient_id' => 22,
                'recette_id' => 1,
            ),
            15 => 
            array (
                'id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 1,
                'unite_id' => 2,
                'ingredient_id' => 23,
                'recette_id' => 1,
            ),
            16 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 10,
                'unite_id' => 3,
                'ingredient_id' => 8,
                'recette_id' => 2,
            ),
            17 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 3,
                'unite_id' => 1,
                'ingredient_id' => 3,
                'recette_id' => 2,
            ),
            18 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'quantite' => 150,
                'unite_id' => 3,
                'ingredient_id' => 26,
                'recette_id' => 2,
            ),
        ));
        
        
    }
}