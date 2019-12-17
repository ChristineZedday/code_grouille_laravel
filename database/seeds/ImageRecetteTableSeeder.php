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
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'recette_id' => 1,
                'image_id' => 63,
            ),
            1 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'recette_id' => 2,
                'image_id' => 64,
            ),
            2 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'recette_id' => 3,
                'image_id' => 65,
            ),
            3 => 
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