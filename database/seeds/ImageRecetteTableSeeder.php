<?php

use Illuminate\Database\Seeder;

class ImageRecetteTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('image_recette')->delete();
        
        \DB::table('image_recette')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'recette_id' => 5,
                'image_id' => 19,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'recette_id' => 5,
                'image_id' => 18,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'recette_id' => 1,
                'image_id' => 63,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'recette_id' => 2,
                'image_id' => 64,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'recette_id' => 3,
                'image_id' => 65,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'recette_id' => 7,
                'image_id' => 66,
            ),
        ));
        
        
    }
}